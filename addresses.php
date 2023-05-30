<?php 
use Alura\Bank\Model\Address;

require_once 'autoload.php';

$umEndereço = new Address('Joinville','Bairro qualquer','minha rua', '123');

$outroEndereço = new Address('Joinville','Bairro Lages','minha rua', '152');


echo $umEndereço;