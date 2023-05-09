<?php

namespace Alura\Bank\Model;

class Address {

    protected string $city;
    protected string $neighborhood;
    protected string $street;
    protected string $number;

    public function __construct(string $city, string $neighborhood, string $street, string $number)
    {
        $this->city = $city;
        $this->neighborhood = $neighborhood;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }


}