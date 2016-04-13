<?php

namespace Tests;

use App\Http\Controllers\Controller;
use App\Services\UsuarioGithub;
use GuzzleHttp\Client;

class ControllerTest extends \TestCase
{

    /**
     * @var Controller
     */
    private $controller;

    public function setUp()
    {
        $github = new UsuarioGithub(new Client());
        $de = $this->getMock('\App\Models\De');
        $para = $this->getMock('\App\Models\Para');

        $this->controller = new Controller($github, $de, $para);

        parent::setUp();
    }

    /**
     * @dataProvider usuariosGithub
     */
    public function testOcorrerUmErroAoinformarUmUsuarioInvalidoDoGitHub($githubDe, $githubPara, $retorno)
    {
        $request = $this->getMock('Illuminate\Http\Request');
        $request->expects($this->once())
            ->method('all')
            ->will($this->returnValue([
                'de' => [
                    'usuario_github' => $githubDe
                ],
                'para' => [
                    'usuario_github' => $githubPara
                ]
            ]));

        $mailer = $this->getMockBuilder('Illuminate\Mail\Mailer')
            ->disableOriginalConstructor()
            ->getMock();

        $response = $this->controller->postParticipar($request, $mailer);

        $this->assertJson(
            sprintf(
                '{"mensagem" : "%s", "erro": true}', $retorno
            ),
            $response
        );
    }

    public function usuariosGithub()
    {
        return [
            [
                'usuario do usuario que convida',
                'usuario para quem o convite está sendo enviado',
                'Por favor informe o seu usuário válido do Github'
            ],
            [
                'marabesi',
                'usuario para quem o convite está sendo enviado',
                'O usuário do Github de seu amigo deve ser um válid'
            ],
        ];
    }
}