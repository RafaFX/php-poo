<?php 

use Alura\Bank\Model\Account\Holder;
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Employees\Developer;
use Alura\Bank\Model\Employees\Director;
use Alura\Bank\Service\Authenticator;

require_once 'autoload.php';

$authenticador = new Authenticator();

$umDiretor = new Developer(new Cpf('123.566.189-12'),'Patricia Dias','15000');

$authenticador->tryLogin($umDiretor, '1234');
