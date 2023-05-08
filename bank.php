<?php

require_once 'src/Account.php';
require_once 'src/Address.php';
require_once 'src/Holder.php';
require_once 'src/Cpf.php';


$firstAccount = new Account(new Holder(new Cpf('123.456.123-12'),'Vinicius Dias',new Address('Joinville', 'Bom Retiro','rua','71B')));

var_dump($firstAccount);
