<?php

namespace Alura\Bank\Model\Employees;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Person;
class Employee extends Person {

    private string $role;
    private  float $wage;

    public function __construct(Cpf $cpf , string $name, string $role, float $wage)
    {
        parent::__construct($cpf,$name);
        $this->role = $role;
        $this->wage = $wage;
    }

    public function getRole(): string
    {
        return $this->role;
    }


    public function getWage(): float
    {
        return $this->wage;
    }

    public function calculateBonus(): float
    {
        return $this->wage * 0.1;
    }

}