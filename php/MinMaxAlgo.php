<?php

// Divide and Conquer Algorithm.
// Min-Max Algorithm.
class MinMaxAlgo
{
    public function getMax(array $array): int
    {
        $n = count($array);
        $max = $array[0];
        for ($i = 1; $i < $n; $i++) {
            if ($max < $array[$i]) {
                $max = $array[$i];
            }
        }
        return $max;
    }

    public function getMin(array $array): int
    {
        $n = count($array);
        $min = $array[0];
        for ($i = 1; $i < $n; $i++) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
        return $min;
    }
}

$object = new MinMaxAlgo;
echo "The max number is: {$object->getMax([1,2,4,22,3,78,54,23])} and the min number is: {$object->getMin([1,2,4,22,3,78,54,23])}";
