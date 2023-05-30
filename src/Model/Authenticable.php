<?php 

namespace Alura\Bank\Model;

interface Authenticable
{
    public function canAuthenticate(string $password): bool;
}