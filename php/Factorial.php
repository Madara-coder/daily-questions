<?php
// 2. Find the factorial of a given number. (Using recursion)

class Factorial
{
    public function factorial(int $number): string
    {
        if ($number === 0) {
            return "The factorial is 1";
        } else if ($number < 0) {
            return "The number is invalid";
        } else {
            return $number * factorial($number-1);
        }
    }
}

$object = new Factorial;
echo "The factorial is : {$object->factorial(5)}";