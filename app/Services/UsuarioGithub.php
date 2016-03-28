<?php

namespace App\Services;

use GuzzleHttp\Client;

class UsuarioGithub
{
    protected $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function verificarExistencia($usuario)
    {
        try {
            $request = $this->guzzle->get(
                sprintf('https://api.github.com/users/%s', $usuario)
            );

            return $request->getStatusCode() == 200 ? true : false;
        } catch (\Exception $erro) {
            return false;
        }
    }
}