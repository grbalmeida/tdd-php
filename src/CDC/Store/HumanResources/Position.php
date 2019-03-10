<?php

namespace CDC\Store\HumanResources;

class Position
{
    private $positions = [
        'DEVELOPER' => 'CDC\Store\HumanResources\TenOrTweentyPercent',
        'DBA' => 'CDC\Store\HumanResources\FifteenOrTweentyPercent',
        'TESTER' => 'CDC\Store\HumanResources\FifteenOrTweentyPercent'
    ];
    private $rule;

    public function __construct(string $rule)
    {
        if (array_key_exists($rule, $this->positions)) {
            $this->rule = $this->positions[$rule];
        } else {
            throw new \Exception('Cargo inválido');
        }
    }

    public function getRule(): string
    {
        return $this->rule;
    }
}