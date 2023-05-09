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

    protected function validateNameHolder(string $nameHolder)
    {
        if(strlen($nameHolder) < 5){
            echo "erro no nome";
            exit();
        }
    }

}