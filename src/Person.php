<?php 

class Person {

    public string $name;
    public Cpf $cpf;
    public Address $address;

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

}