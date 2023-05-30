<?php 

namespace Alura\Bank\Service;
use Alura\Bank\Model\Authenticable;


class Authenticator {


    public function tryLogin( Authenticable $authenticable, string $password): void
    {
        if($authenticable->canAuthenticate($password)) {
            echo "ok. Úsuario logado com sucesso";
        } else {
            echo "Senha incorreta";
        }
    }
}