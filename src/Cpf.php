<?php

class Cpf {

    private string $cpfHolder;

    public function __construct($cpfHolder){

        $cpfHolder = filter_var($cpfHolder, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($cpfHolder === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->cpfHolder = $cpfHolder;


        $this->cpfHolder =  $cpfHolder;
    }


    public function getCpfNumber(): string
    {
        return $this->cpfHolder;
    }

}