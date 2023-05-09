<?php

namespace Alura\Bank\Model\Account;


use Alura\Bank\Model\Address;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Person;

class Holder extends Person
{
    protected Address $address;

    public function __construct(Cpf $cpfHolder, string $nameHolder, Address $address)
    {
        parent::__construct($cpfHolder,$nameHolder);
        $this->validateNameHolder($nameHolder);
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpfNumber();
    }

    public function getAdress(): Address
    {
        return $this->address;
    }

}