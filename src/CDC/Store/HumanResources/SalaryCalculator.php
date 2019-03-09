<?php

namespace CDC\Store\HumanResources;

class SalaryCalculator
{
    public function calculateSalary(Employee $employee): float
    {
        $salary = $employee->getSalary();

        if ($employee->getPosition() == EmployeePosition::DBA)
            return $salary * 0.85;

        if ($employee->getSalary() > 3000.00)
            return $salary * 0.8;

        return $salary * 0.9;
    }
}
