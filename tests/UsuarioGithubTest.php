<?php

namespace Tests;

class UsuarioGithubTest extends \TestCase
{

    public function testUsuarioGithubValido()
    {
        $github = new \App\Services\UsuarioGithub(new \GuzzleHttp\Client());

        $this->assertTrue($github->verificarExistencia('marabesi'));
    }

    public function testUsuarioGithubNaoExistente()
    {
        $github = new \App\Services\UsuarioGithub(new \GuzzleHttp\Client());

        $this->assertFalse($github->verificarExistencia('marabesi211221'));
    }
}
