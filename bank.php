<?php

require_once 'autoload.php';


use Alura\Bank\Model\Account\{Account,Holder,SavingsAccount};
use Alura\Bank\Model\{Address,Cpf};

require_once 'autoload.php';


$firstAccount = new SavingsAccount(new Holder(new Cpf('123.456.123-12'),'Vinicius Dias',new Address('Joinville', 'Bom Retiro','rua','71B')));

$firstAccount->deposit(500);
$firstAccount->withdraw(200);


var_dump($firstAccount);
