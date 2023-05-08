<?php

class Holder extends Person
{

    private Address $address;


    public function __construct(Cpf $cpfHolder, string $nameHolder, Address $address)
    {
        $this->cpfHolder = $cpfHolder;
        $this->validateNameHolder($nameHolder);
        $this->nameHolder = $nameHolder;
    }


    public function getName(): string
    {
        return $this->nameHolder;
    }

    public function getCpf(): string
    {
        return $this->cpfHolder->getCpfNumber();
    }

    private function validateNameHolder(string $nameHolder)
    {
        if(strlen($nameHolder) < 5){
            echo "erro no nome";
            exit();
        }
    }

    public function getAdress(): Address
    {
        return $this->address;
    }




}