<?php

// LeetCode Question: 58
// Write a program to find the length of the last word.
// Given a string s consisting of words and spaces, return the length of the last word in the string.
// A word is a maximal
// substring
//  consisting of non-space characters only.

// Example 1:
// Input: s = "Hello World"
// Output: 5
// Explanation: The last word is "World" with length 5.

class LengthLastWord
{
    public function lengthLastWord(string $word): int|string
    {
        // position of last occuring space in the string
        $pos = strpos($word, ' ');

        if (!$pos) {
           $pos = 0;
           return "Only one word is given";
        } else {
           $pos =+ 1;
        }

        // get the last word in the string
        $lastWord = substr($word, $pos);

        // return length of last word
        return strlen($lastWord);
    }
}

$object = new LengthLastWord;
echo $object->lengthLastWord(("Hello Everyone"));