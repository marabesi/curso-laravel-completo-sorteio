<?php

namespace App\Http\Controllers;

use App\Models\De;
use App\Models\Para;
use App\Services\UsuarioGithub;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

class Controller extends BaseController
{

    /**
     * @var \App\Services\UsuarioGithub
     */
    private $github;

    public function __construct(UsuarioGithub $github)
    {
        $this->github = $github;
    }

    /**
     * Recebe os dados enviados pelo formulário para cadastrar na base de dados e envia um e-mail
     * para o usuário convidado
     * @param Request $request
     * @return JsonResponse
     */
    public function postParticipar(Request $request, Mailer $mailer)
    {
        $params = $request->all();

        if (!$this->github->verificarExistencia($params['de']['usuario_github'])) {
            return new JsonResponse([
                'mensagem' => 'Por favor informe o seu usuário válido do Github',
                'erro' => true
            ]);
        }

        if (!$this->github->verificarExistencia($params['para']['usuario_github'])) {
            return new JsonResponse([
                'mensagem' => 'O usuário do Github de seu amigo deve ser um válido',
                'erro' => true
            ]);
        }

        $para = new Para();
        $find = $para->where('email', $params['para']['email']);

        if ($find->count()) {
            return new JsonResponse([
                'mensagem' => 'Esse email já foi convidado para participar do sorteio',
                'erro' => true
            ]);
        }

        if ($params['de']['email'] == $params['para']['email']) {
            return new JsonResponse([
                'mensagem' => 'Você não pode se auto-convidar, escolha o e-mail de um amigo seu',
                'erro' => true
            ]);
        }

        $de = new De($params['de']);
        $de->save();

        $params['para']['token'] = sprintf('%s|%s|%s', $params['de']['email'], $params['de']['usuario_github'], $de->id);

        $para = new Para($params['para']);

        $para->save();
        $para->convite()->attach($de->id);

        $mailer->send('de_email', [ 'params' => $params ], function($email) use ($params) {
            $email->from(
                $params['de']['email'],
                $params['de']['usuario_github']
            );
            $email->to(
                $params['para']['email'],
                $params['para']['usuario_github']
            );
            $email->subject(sprintf('Você acabou de convidar %s!', $params['para']['usuario_github']));
        });

        return new JsonResponse([
            'mensagem' => 'Convite de participação enviado',
            'erro' => false
        ]);
    }

    /**
     * Confirma a inscrição do usuário convidado
     * @param $token
     * @return JsonResponse
     */
    public function getConfirmarParticipacao($token)
    {
        $para = new Para();
        $convite = $para->where('token', $token)->where('confirmado', false);

        if ($convite->count()) {
            $convite->update([
                'confirmado' => true
            ]);

            return view('confirmar', ['mensagem' => 'Convite confirmado com sucesso! :)']);
        }

        return view('confirmar', ['mensagem' => 'Não foi possível confirmar o convite :(']);
    }
}
