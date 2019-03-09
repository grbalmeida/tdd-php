<?php

namespace CDC\Store\HumanResources;

class Employee
{
    protected $name;
    protected $salary;
    protected $position;

    public function __construct(string $name, float $salary, int $position)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getPosition(): int
    {
        return $this->getPosition();
    }
}