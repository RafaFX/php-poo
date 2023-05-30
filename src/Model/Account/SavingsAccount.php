<?php

namespace Alura\Bank\Model\Account;

class SavingsAccount extends Account {


    protected function percentageFee(): float
    {
        return 0.03;
    }
}