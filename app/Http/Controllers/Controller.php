<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

class Controller extends BaseController
{

    /**
     * Recebe os dados enviados pelo formulário para cadastrar na base de dados e envia um e-mail
     * para o usuário convidado
     * @param Request $request
     * @return JsonResponse
     */
    public function postParticipar(Request $request, Mailer $mailer)
    {
        $params = $request->all();

        $mailer->send('de_email', [ 'params' => $params ], function($email) use ($params) {
            $email->from(
                $params['de_email'],
                $params['de_usuario_github']
            );
            $email->to(
                $params['para_email'],
                $params['para_usuario_github']
            );
            $email->subject(sprintf('Você acabou de convidar %s!', $params['para_usuario_github']));
        });

        return new JsonResponse(['mensagem' => 'Convite de participação enviado']);
    }

    /**
     * Confirma a inscrição do usuário convidado
     * @param $hash
     * @param $de
     */
    public function getConfirmarParticipacao($hash, $de)
    {
    }
}
