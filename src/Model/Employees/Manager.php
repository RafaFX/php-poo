<?php 

namespace Alura\Bank\Model\Employees;
use Alura\Bank\Model\Authenticable;

class Manager extends Employee implements Authenticable {


    public function calculateBonus(): float
    {
        return $this->getWage();
    }


    public function canAuthenticate(string $password): bool
    {
        return $password === '4321';
    }
}