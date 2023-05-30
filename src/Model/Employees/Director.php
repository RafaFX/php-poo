<?php 

namespace Alura\Bank\Model\Employees;
use Alura\Bank\Model\Authenticable;

class Director extends Employee implements Authenticable {


    public function calculateBonus(): float
    {
        return $this->getWage() * 2;
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '1234';
    }

}