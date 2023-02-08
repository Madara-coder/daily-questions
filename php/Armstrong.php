<?php

// Write a program for finding whether the number is armstrong or not.

class Armstrong
{
    public function armstrongNo(int $number): void
    {
        $iteration = $number;
        $sum = 0;

        while ($iteration > 0) {
            $remainder = $iteration % 10;
            $sum = $sum + pow($remainder, 3);
            $iteration = $iteration / 10;
        }

        if ($sum == $number) {
            echo "{$number} is an Armstrong number";
        } else {
            echo "{$number} is not an Armstrong number";
        }
    }
}

$object = new Armstrong;
$object->armStrongNo(371);