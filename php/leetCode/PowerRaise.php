<?php

// LeetCode question no: 50
// Implement pow(x, n), which calculates x raised to the power n (i.e., xn).
// Example 1:
// Input: x = 2.00000, n = 10
// Output: 1024.00000

class PowerRaise
{
    public function powerRaise(float $number, int $power): string
    {
        $total = 1;
        if ($power === 1) {
            return "The Total number is: {$number}";
        } elseif ($power === 0) {
            return "The Total number is: 0";
        } else {
            for ($i = 1; $i <= $power; $i++) {
                $total *= $number;
            }
            return "The Total number is: {$total}";
        }
    }
}

$object = new PowerRaise;
echo $object->powerRaise(100, 1);