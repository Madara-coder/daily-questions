<?php

// leetCode question: 904 (Asked in Google Interview)
// Title: Fruit Into Baskets.

// You are visiting a farm that has a single row of fruit trees arranged from left to right. The trees are represented
// by an integer array fruits where fruits[i] is the type of fruit the ith tree produces.
// You want to collect as much fruit as possible. However, the owner has some strict rules that you must follow:
// You only have two baskets, and each basket can only hold a single type of fruit. There is no limit on the amount of
//  fruit each basket can hold.
// Starting from any tree of your choice, you must pick exactly one fruit from every tree (including the start tree)
//  while moving to the right. The picked fruits must fit in one of your baskets.
// Once you reach a tree with fruit that cannot fit in your baskets, you must stop.
// Given the integer array fruits, return the maximum number of fruits you can pick.

// Example 1:
// Input: fruits = [1,2,1]
// Output: 3
// Explanation: We can pick from all 3 trees.

// Example 2:
// Input: fruits = [0,1,2,2]
// Output: 3
// Explanation: We can pick from trees [1,2,2].
// If we had started at the first tree, we would only pick from trees [0,1].

// Example 3:
// Input: fruits = [1,2,3,2,2]
// Output: 4
// Explanation: We can pick from trees [2,3,2,2].
// If we had started at the first tree, we would only pick from trees [1,2].

// Constraints:
// 1 <= fruits.length <= 105
// 0 <= fruits[i] < fruits.length

// Solution:
class FruitBasket
{
    public function totalFruit(array $tree): int
    {
        if (count($tree) === 1) {
            return 1;
        } elseif (count($tree) === 2) {
            return 2;
        } else {
            $repeatedFirst = [];
            foreach ($tree as $item) {
                if (!isset($repeatedNumbers[$item])) {
                    $repeatedFirst[$item] = 1;
                } else {
                    $repeatedFirst[$item]++;
                }
            }
            if (count($repeatedFirst) <= 2) {
                return count($tree);
            }
            $max = PHP_INT_MIN;
            for ($i = 0; $i < count($tree); $i++) {
                $repeatedNumbers = [];
                $repeatedNumbers[$tree[$i]] = 1;
                $total = 1;
                for ($j = ($i+1); $j < count($tree); $j++) {
                    if (!isset($repeatedNumbers[$tree[$j]])) {
                        $repeatedNumbers[$tree[$j]] = 1;
                    } else {
                        $repeatedNumbers[$tree[$j]]++;
                    }
                    $total++;
                    if (count($repeatedNumbers) <= 2) {
                        $max = max($max, $total);
                    } elseif (count($repeatedNumbers) > 2) {
                        break;
                    }
                }
            }
            return $max;
        }
    }
}

$obj = new FruitBasket;
echo $obj->totalFruit([1,2,2,1,3]);
