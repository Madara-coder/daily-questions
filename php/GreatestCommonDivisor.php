<?php
// 1. Write a program to find the GCD (Greatest Common Divisor) of the given two numbers.

class GreatestCommonDivisor
{
    public function findGcd(int $firstNo, int $secondNo): string
    {
        if ($firstNo === 0) {
            return "{$secondNo} is the GCD";
        } else if ($secondNo === 0) {
            return "{$firstNo} is the GCD";
        } else {
            while ($secondNo != 0) {
                $remainder = $firstNo%$secondNo;
                $firstNo = $secondNo;
                $secondNo = $remainder;
            }
            return "{$firstNo} is the GCD";
        }
    }
}

$object = new GreatestCommonDivisor();
$object->findGcd(270, 192);
