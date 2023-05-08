<?php


class Account {
    
    private Holder $holder;
    private  float $balance;
    private static int $numberOfAccounts = 0;


    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;

        Account::$numberOfAccounts++;
    }



    public function withdraw(float $valueToWithdraw): void
    {
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
    
    public function transfer(float $valueToTransfer, Account $accountDestiny):void
    {
        if($valueToTransfer > $this->balance){
            echo 'erro';
            return;
        }
            $this->withdraw($valueToTransfer);
            $accountDestiny->deposit($valueToTransfer);
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
    
}

