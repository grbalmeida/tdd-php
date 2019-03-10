<?php

namespace CDC\Store\HumanResources;

class SalaryCalculator
{
    public function calculateSalary(Employee $employee): float
    {
        $position = new Employee($employee->getPosition());
        
        return $position->getRule()->calculateSalary($employee);
    }
}
