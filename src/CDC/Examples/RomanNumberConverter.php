<?php

namespace CDC\Examples;

class RomanNumberConverter
{
    protected $table = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    public function convert(string $romanNumber): int
    {
        $accumulator = 0;
        $lastNeighborOnTheRight = 0;

        for($counter = strlen($romanNumber) - 1; $counter >= 0; $counter--) {
            $current = 0;
            $currentNumber = $romanNumber[$counter];

            if (array_key_exists($currentNumber, $this->table)) {
                $current = $this->table[$currentNumber];
            }

            $multiplier = 1;

            if ($current < $lastNeighborOnTheRight) {
                $multiplier = -1;
            }

            $accumulator += ($current * $multiplier);
            $lastNeighborOnTheRight = $current;
        }

        return $accumulator;
    }
}