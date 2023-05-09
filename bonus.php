<?php

use Alura\Bank\Service\ControlOfBonus;
use Alura\Bank\Model\{Employee, Cpf};

require_once 'src/Model/Person.php';
require_once 'src/Model/Employee.php';
require_once 'src/Model/Cpf.php';
require_once 'src/Model/Service/ControlOfBonus.php';

$umFuncionario = new Employee(new Cpf('123.456.789-10'),'Vinicius Dias','Desenvolvedor','1000');

$umaFuncionaria = new Employee(new Cpf('123.566.189-12'),'Patricia Dias','Desenvolvedora','1500');


$controlador = new ControlOfBonus();
$controlador->addBonus($umFuncionario);
$controlador->addBonus($umaFuncionaria);


echo $controlador->getTotal();