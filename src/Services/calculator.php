<?php
namespace App;

use InvalidArgumentException;

class Calculator {
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    public function subtract(int $a, int $b): int {
        return $a - $b;
    }

    public function multiply(int $a, int $b): int {
        return $a * $b;
    }

    public function divide(float $a, float $b): float {
        if ($b == 0.0) {
            throw new InvalidArgumentException("Denominator cannot be zero");
        }
        return $a / $b;
    }

    public function factorial(int $n): float {
        if ($n < 0) {
            throw new InvalidArgumentException("Negative numbers are not allowed");
        }
        $result = 1.0;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}