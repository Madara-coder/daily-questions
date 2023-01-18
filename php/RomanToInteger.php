<?php

// Write a program to convert any Roman number into the Integer Number

class RomanIntegerConversion
{
    public function romanToInt(string $roman): int|float
    {
        $array = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];
        $sum = 0;
        for ($i = 0; $i < strlen($roman); $i++){
            $curr = $roman[$i];
            $next = $roman[$i+1];
            if ($array[$curr] < $array[$next]) {
                $sum += $array[$next] - $array[$curr];
                $i++;
            } else {
                $sum += $array[$curr];
            }
        }
        return $sum;
    }

    public function intToRoman(int $number): string
    {
        $result = '';
        $lookup = [
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];
        foreach ($lookup as $roman => $value) {
            // Determine the number of matches
            $matches = $number/$value;
            // Add the same number of characters to the string
            $result .= str_repeat($roman, $matches);
            // Set the integer to be the remainder of the integer and the value\
            $number = $number % $value;
        }
        return $result;
    }
}

$object = new RomanIntegerConversion;
echo $object->romanToInt("MCMXCIV");
echo $object->intToRoman(113);
