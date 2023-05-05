<?php


class Account {
    
    private string $cpfHolder;
    private string $nameHolder;
    private  float $balance = 0;

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

    public function getName():string
    {
        return $this->nameHolder;
    }

    public function setName(string $name)
    {
        return $this->nameHolder = $name;
    }
    
    public function getCpf():string
    {
        return $this->cpfHolder;
    }
    
    public function setCpf(string $cpf)
    {
        return $this->cpfHolder = $cpf;
    }


}

