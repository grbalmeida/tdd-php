<?php

namespace CDC\Store\HumanResources;

use CDC\Store\HumanResources\CalculationRule;
use CDC\Store\HumanResources\Employee;

class FifteenOrTweentyPercent implements CalculationRule
{
    protected function basePercentage(): float
    {
        return 0.85;
    }

    protected function percentageAboveTheLimit(): float
    {
        return 0.75;
    }

    protected function limit(): float
    {
        return 2500.00;
    }    
}