<?php

// 4. Implement linear/sequential Search Algorithm to find whetehr the nubner is present in the array or not.

class LinearSearch
{
    public function linearSearch(int $totalNo, array $data, int $key): string
    {
        for ($i = 0; $i<$totalNo; $i++) {
            if ($data[$i] === $key) {
                return "Key found at array position of : {$i}";
            }
        }
        return "Search unsuccessful, Sorry no result found";
    }
}

$object = new LinearSearch;
$object->linearSearch(
    16, // total number in array
    [1,2,3,4,5,6,11,12,13,14,15,16,17,21,22,23],// total data in array
    15 // number to be found
);