<?php

// LeetCode Problem:
// 2. Add Two Numbers
// -> You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse
// order, and each of their nodes contains a single digit. Add the two numbers and return the sum as a linked list.
// You may assume the two numbers do not contain any leading zero, except the number 0 itself.
// Example 1:
// Input: l1 = [2,4,3], l2 = [5,6,4]
// Output: [7,0,8]
// Explanation: 342 + 465 = 807.

// Example 2:
// Input: l1 = [0], l2 = [0]
// Output: [0]

// Example 3:
// Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
// Output: [8,9,9,9,0,0,0,1]

// Constraints:
// The number of nodes in each linked list is in the range [1, 100].
// 0 <= Node.val <= 9
// It is guaranteed that the list represents a number that does not have leading zeros.

class AddTwoNum
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */

    public function addTwoNum(array $l1, array $l2): array|int
    {
        $carry = 0;
        $result = new ListNode(0); // is a dummy LinkedList
        $curNode = $result;

        while ($l1 || $l2) {// while l1 or l2 is not null or false
            $v1 = ($l1)? $l1->val : 0;
            $v2 = ($l2)? $l2->val : 0;
            $sum = $v1 + $v2 + $carry;
            $carry = intval($sum / 10);
            $sum %= 10;
            $curNode->next = new ListNode($sum);
            $curNode = $curNode->next;
            // If this is a linkedList, get next. If already a null, keep it null.
            $l1 = ($l1 != null)? $l1->next : null;
            $l2 = ($l2 != null)? $l2->next : null;
        }
        return $result->next;
    }
}

$object = new AddTwoNum;
echo $object->addTwoNum([2,4,3], [5,6,4]);