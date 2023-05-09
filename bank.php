<?php

require_once 'autoload.php';


use Alura\Bank\Model\Account\{Account,Holder,SavingsAccount};
use Alura\Bank\Model\{Address,Cpf};

require_once 'src/Model/Account/Account.php';
require_once 'src/Model/Account/SavingsAccount.php';
require_once 'src/Model/Address.php';
require_once 'src/Model/Person.php';
require_once 'src/Model/Employee.php';
require_once 'src/Model/Account/Holder.php';
require_once 'src/Model/Cpf.php';


$firstAccount = new SavingsAccount(new Holder(new Cpf('123.456.123-12'),'Vinicius Dias',new Address('Joinville', 'Bom Retiro','rua','71B')));

$firstAccount->deposit(500);
$firstAccount->withdraw(200);

var_dump($firstAccount);
