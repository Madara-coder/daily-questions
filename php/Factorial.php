<?php
// 2. Find the factorial of a given number. (Using recursion)

class Factorial
{
    public function fact(int $number)
    {
       if ($number > 0) {
            return ($number * $this->fact($number - 1));
       } elseif ($number === 0) {
            return 1;
       } else {
            return "Invalid number";
       }
    }
}

$object = new Factorial;
$object->fact(5);