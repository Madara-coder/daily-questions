<?php
// Leet code question: 1
// Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
// You may assume that each input would have exactly one solution, and you may not use the same element twice.
// You can return the answer in any order.

// Example 1:
// Input: nums = [2,7,11,15], target = 9
// Output: [0,1]
// Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

class TwoSum
{
    public function twoSum(array $nums, int $target): string
    {
        for ($i = 0; $i <= count($nums); $i++) {
            $sum = $nums[$i] + $nums[$i+1];
            $j = $i+1;
            if ($sum === $target) {
                return "The target is: {$target} which can be obtained by the indexes: [{$i},{$j}] of the given array.";
            }
        }
        return "The output is not equal to the target";
    }
}

$object = new TwoSum;
echo $object->twoSum([2,7,11,15], 26);