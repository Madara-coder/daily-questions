<?php

class Solution
{
    public function twoSum(array $nums, int $target): array
    {
        $numIndices = [];

        foreach ($nums as $index => $num) {
            $complement = $target - $num;
            if (array_key_exists($complement, $numIndices)) {
                return [$numIndices[$complement], $index];
            }
            $numIndices[$num] = $index;
        }

        return [];
    }
}

$obj = new Solution();
echo $obj->twoSum([2, 7, 11, 15], 9);
