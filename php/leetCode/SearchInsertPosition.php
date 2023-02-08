<?php

// leetCode question: 35
// Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return
// the index where it would be if it were inserted in order.

// Example 1:
// Input: nums = [1,3,5,6], target = 5
// Output: 2

// Example 2:
// Input: nums = [1,3,5,6], target = 2
// Output: 1

// Example 3:
// Input: nums = [1,3,5,6], target = 7
// Output: 4

class SearchInsertPosition
{
    public function solution(array $nums, int $target): string
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] === $target) {
                return  "Target found at index: {$nums[$i]} of the given array";
            }
            if ($nums[$i] > $target) {
                return "Target would be at index: {$i}";
            }
        }
        return "No number: {$target} found in the given array";
    }
}

$obj = new SearchInsertPosition;
echo $obj->solution([1,2,3,4,5,6,7,9,10], 8);
