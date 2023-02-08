<?php

// leetCode question: 9

// Write a program for finding the palindrome number

class Palindrome
{
    public function reverse(int $number): void
    {
        $revNum = 0;
        $val = $number;

        while (floor($val)) {// returns 0 at last which means false and the loop stops.
            $rem = $val % 10;
            $revNum = $revNum * 10 + $rem;
            $val = $val / 10;
        }

        if ($revNum == $number) {
            echo "{$number} is palindrome.";
        } else {
            echo "{$number} is not palindrome.";
        }
    }
}

$object = new Palindrome;
$object->reverse(111);