<?php 

namespace Alura\Bank\Model\Employees;
use Alura\Bank\Model\Authenticable;

class Developer extends Employee implements Authenticable{


    public  function levelUp()
    {
        $this->getRaise($this->getWage() * 0.05);
    }

    public function calculateBonus(): float
    {
        return 500;
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '1234';
    }

}