<?php

namespace Alura\Bank\Model\Account;


use Alura\Bank\Model\Account\Holder;


    abstract class Account {
    
    private Holder $holder;
    protected  float $balance;
    private static int $numberOfAccounts = 0;


    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;

        Account::$numberOfAccounts++;
    }



    public function withdraw(float $valueToWithdraw): void
    {
        $fee = $valueToWithdraw * $this->percentageFee();
        $valueToWithdraw = $valueToWithdraw + $fee;
        if($valueToWithdraw > $this-> balance){
            echo "Saldo indiponivel";
            return;
        }
            $this-> balance -= $valueToWithdraw;
    }

    public function deposit(float $valueToDeposit): void
    {
        if($valueToDeposit <= 0){
            echo "Valor não aceito";
            return;
        }
            $this->balance += $valueToDeposit;
        
    }
    

    public function getBalance():float
    {
        return $this->balance;
    }

    public function getNameHolder():string
    {
        return $this->holder->getName();
    }

    public function getCpfHolder():string
    {
        return $this->holder->getCpf();
    }


    public static function getNumberOfAccounts():int
    {
        return Conta::$numberOfAccounts;
    }

    public function __destruct()
    {
        self::$numberOfAccounts--;
    }
    

    abstract protected function percentageFee(): float;

}

