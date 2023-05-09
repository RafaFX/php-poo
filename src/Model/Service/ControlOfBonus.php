<?php

namespace Alura\Bank\Service;
use Alura\Bank\Model\Employee;

class ControlOfBonus {

    private $totalBonus = 0;

    public function addBonus(Employee $employee)
    {
        $this->totalBonus += $employee->calculateBonus();
    }

    public function getTotal(): float
    {
        return $this->totalBonus;
    }

}