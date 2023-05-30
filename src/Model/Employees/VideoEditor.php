<?php 

namespace Alura\Bank\Model\Employees;

class VideoEditor extends Employee {

    public function calculateBonus(): float
    {
        return 600;
    }
}