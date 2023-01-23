<?php

// LeedCode Question:
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
    public function lengthLastWord(string $word)
    {
        return strlen($word);
    }
}

$object = new LengthLastWord;
echo $object->lengthLastWord("My name is Debrath Sharma");