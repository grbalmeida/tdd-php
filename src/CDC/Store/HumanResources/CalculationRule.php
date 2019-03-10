<?php

namespace CDC\Store\HumanResources;

use CDC\Store\HumanResources\Employee;

abstract class CalculationRule
{
    public function calculateSalary(Employee $employee): float
    {
        $salary = $employee->getSalary();

        if ($salary > $this->limit()) {
            return $salary * $this->percentageAboveTheLimit();
        }

        return $salary * $this->basePercentage();
    }

    abstract protected function limit(): float;
    abstract protected function percentageAboveTheLimit(): float;
    abstract protected function basePercentage(): float;
}