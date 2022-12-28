<?php

// 3. Find the nth term in the fibonacci series.

class Fibonacci
{
    public function fibonacci(
        int $firstNo,
        int $secondNo,
        int $number
    ): string {
        $i = $firstNo;

        while ($i <= $number) {
            $temp = $firstNo + $secondNo;
            $firstNo = $secondNo;
            $secondNo = $temp;
            $i++;
        }
        return $temp;
    }
}

$object = new Fibonacci;
echo "Enter the term of number which you want";
echo "The fibonacci total of the given term is : {$object->fibonacci(0, 1, 11)}";// first number, second number should be constant i.e 0 and 1 and the third parameter is for the term.