<?php

// Write a program to convert any Roman number into the Integer Number

//Hint:-

// Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

// Symbol       Value
// I             1
// V             5
// X             10
// L             50
// C             100
// D             500
// M             1000
// For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

// Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

// I can be placed before V (5) and X (10) to make 4 and 9.
// X can be placed before L (50) and C (100) to make 40 and 90.
// C can be placed before D (500) and M (1000) to make 400 and 900.
// Given a roman numeral, convert it to an integer.



// Example 1:

// Input: s = "III"
// Output: 3
// Explanation: III = 3.
// Example 2:

// Input: s = "LVIII"
// Output: 58
// Explanation: L = 50, V= 5, III = 3.
// Example 3:

// Input: s = "MCMXCIV"
// Output: 1994
// Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.


// Constraints:

// 1 <= s.length <= 15
// s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').

class RomanToInteger
{
    // This method has some errors. For eg: If we feed VIII it returns 4 and so on.
    public function convert(string $input): float|int
    {
        $romanVal = '';
        $romanNoLength = strlen($input);
        $resultRomanNo = 0;

        for ($i = 0; $i <= $romanNoLength; $i++) {
            $romanValPrev = $romanVal;
            $romanNumeral = substr($input, $romanNoLength - $i, 1);// returns a part of a string. substr(string, start, length);

            switch ($romanNumeral) {
                case "M":
                    $romanVal = 1000;
                    break;
                case "D":
                    $romanVal = 500;
                    break;
                case "C":
                    $romanVal = 100;
                    break;
                case "L":
                    $romanVal = 50;
                    break;
                case "X":
                    $romanVal = 10;
                    break;
                case "V":
                    $romanVal = 5;
                    break;
                case "I":
                    $romanVal = 1;
                    break;
                default:
                    $romanVal = 0;
            }

            if ($romanValPrev < $romanVal) {
                $resultRomanNo = $resultRomanNo - $romanVal;
            } else {
                $resultRomanNo = $resultRomanNo + $romanVal;
            }
        }

        return abs($resultRomanNo);// returns the absolute(positive) value of a number.
    }

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

}

$object = new RomanToInteger;
// echo $object->convert("VIII");
echo $object->romanToInt("MCMXCIV");
