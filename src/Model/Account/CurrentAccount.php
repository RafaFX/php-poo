<?php 

namespace Alura\Bank\Model\Account;

class CurrentAccount extends Account
{

    public function transfer(float $valueToTransfer, Account $accountDestiny):void
    {
        if($valueToTransfer > $this->balance){
            echo 'erro';
            return;
        }
            $this->withdraw($valueToTransfer);
            $accountDestiny->deposit($valueToTransfer);
    }

    protected function percentageFee(): float
    {
        return 0.05;
    }

    

}