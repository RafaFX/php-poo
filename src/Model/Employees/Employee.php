<?php

namespace Alura\Bank\Model\Employees;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Person;
abstract class Employee extends Person {

    private string $role;
    private  float $wage;

    public function __construct(Cpf $cpf , string $name, float $wage)
    {
        parent::__construct($cpf,$name);
        $this->wage = $wage;
    }


    public function getRaise(float $valueRaise)
    {
        if ($valueRaise < 0){
            echo "Valor invalido";
            return;
        }
        $this->wage += $valueRaise;
    }

    public function getWage(): float
    {
        return $this->wage;
    }

    abstract public function calculateBonus(): float;


}