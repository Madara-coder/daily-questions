<?php

// Divide and Conquer Algorithm:
// Binary Search Algorithm.

class BinarySearch
{
    public int $size, $flag = 0, $mid;

    public function binarySearch(int $size, array $elements, int $key): void
    {
        $start = 0;
        $end = $size;
        $flag = 0;
        while ($start <= $end) {
            $this->mid = ($start + $end)/2;
            if ($elements[$this->mid] === $key) {
                echo "Element found at index {$this->mid}";
                $flag = 1;
                break;
            } elseif ($key > $elements[$this->mid]) {
                $start = $this->mid + 1;
            } else {
                $end = $this->mid - 1;
            }
        }
        if ($flag === 0) {
            echo "Element Not Found";
        }
    }
}

$object = new BinarySearch;
$object->binarySearch(13, [1,2,3,4,5,6,7,8,11,12,16,17,20], 1); // Size of the array, Enter the elements in the array in ascending order, number to be found.