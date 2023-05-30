<?php 

namespace Alura\Bank\Model;

class Person {

    protected string $name;
    protected Cpf $cpf;
    protected Address $address;

    public function __construct(Cpf $cpf, string $name)
    {
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getCPf(): string
    {
        return $this->cpf->getCpfNumber();
    }

    public function validateNameHolder() :bool
    {
        if(strlen($this->name) < 5){
            return false;
        }
        return true;
    }
}