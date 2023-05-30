<?php

use Alura\Bank\Service\ControlOfBonus;
use Alura\Bank\Model\{Cpf};
use Alura\Bank\Model\Employees\{Employee, Manager, Director, VideoEditor};


require_once 'autoload.php';

$umFuncionario = new Manager(new Cpf('123.456.789-10'),'Vinicius Dias','1000');

$umaFuncionaria = new Director(new Cpf('123.566.189-12'),'Patricia Dias','1500');

$umEditor = new VideoEditor(new Cpf('123.536.129-12'),'Ronaldo','1000');


$controlador = new ControlOfBonus();
$controlador->addBonus($umFuncionario);
$controlador->addBonus($umaFuncionaria);


echo $controlador->getTotal();