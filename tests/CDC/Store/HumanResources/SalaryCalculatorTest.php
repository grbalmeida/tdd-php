<?php

namespace CDC\Store\HumanResources;

require './vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use CDC\Store\HumanResources\SalaryCalculator;
use CDC\Store\HumanResources\Employee;
use CDC\Store\HumanResources\EmployeePosition;

class SalaryCalculatorTest extends PHPUnit
{
    public function testCalculationOfSalaryOfDevelopersWithSalaryBelowTheLimit(): void
    {
        $salaryCalculator = new SalaryCalculator();
        $developer = new Employee('Andre', 1500.00, EmployeePosition::DEVELOPER);

        $salary = $salaryCalculator->calculateSalary($developer);

        $this->assertEquals(1500.00 * 0.9, $salary, null, 0.00001);
   }

    public function testCalculationOfSalaryOfDevelopersWithSalaryAboveTheLimit(): void
    {
        $salaryCalculator = new SalaryCalculator();
        $developer = new Employee('Maria', 4000.00, EmployeePosition::DEVELOPER);

        $salary = $salaryCalculator->calculateSalary($developer);

        $this->assertEquals(4000.00 * 0.8, $salary, null, 0.00001);
    }

    public function testCalculationOfSalaryOfDBASWithSalaryBelowTheLimit(): void
    {
        $salaryCalculator = new SalaryCalculator();
        $dba = new Employee('Roger', 500.00, EmployeePosition::DBA);

        $salary = $salaryCalculator->calculateSalary($dba);

        $this->assertEquals(500.00 * 0.85, $salary, null, 0.00001);
    }
}
