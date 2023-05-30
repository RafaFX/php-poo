<?php
use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Person;
use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../src/Model/Person.php';
require_once __DIR__ . '/../src/Model/Cpf.php';




class PersonTest extends TestCase
{

    
    public function testGetName()
    {
        // $pessoa = $this->createStub(Person::class);
        // $pessoa->method('getName')->willReturn('Rafael');
        // $p = $pessoa->getName();
        //$p = $pessoa(new Cpf('123.456.789-10'),'Rafael');
        // $cpf->method('getCpfNumber')->willReturn('123.131.123-32');
        $cpf = $this->createStub(Cpf::class);

        $pessoa = new Person($cpf, 'Rafael');

        $this->assertEquals($pessoa->getName(),'Rafael');

        unset($pessoa);
    }

    public function testGetCpf()
    {
        $pessoa = new Person(new Cpf('123.456.789-10'), 'Rafael');

        $this->assertEquals($pessoa->getCPf(),'123.456.789-10');

        unset($pessoa);
    }

    public function testValidateNameHolder()
    {

        $nomesTrue = [
            'Rafael',
            'Jonas',
            'Thiago'
        ];

        $nomesFalse = [
            'Joao',
            'Ted',
            'Ana'
        ];

        foreach($nomesTrue as $nome)
        {
            $pessoa = new Person(new Cpf('123.456.789-10'), $nome);

            $this->assertEquals($pessoa->validateNameHolder(),true);
        }

        foreach($nomesFalse as $nome)
        {
            $pessoa = new Person(new Cpf('123.456.789-10'), $nome);

            $this->assertEquals($pessoa->validateNameHolder(),false);
        }

        unset($pessoa);
    }
}