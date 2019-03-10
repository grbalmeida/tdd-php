<?php

namespace CDC\Store\HumanResources;

use CDC\Store\HumanResources\CalculationRule;
use CDC\Store\HumanResources\Employee;

class TenOrTwentyPercent extends CalculationRule
{
    protected function basePercentage(): float
    {
        return 0.9;
    }

    protected function percentageAboveTheLimit(): float
    {
        return 0.8;
    }

    protected function limit(): float
    {
        return 3000.00;
    }
}