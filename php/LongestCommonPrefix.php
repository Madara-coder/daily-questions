<?php

class LongestCommonPrefix
{
    public function longestCommonPrefix(array $array)
    {
        $k = 0;
        $firstPos = 0;
        $longestPrefix = "";
        while (true) {
            if (count($array) === 0 || !$array[$firstPos][$k]) {
                return $longestPrefix;
            }
            $nextCharacter = $array[$firstPos][$k];
            for ($j = 0; $j < count($array); $j++) {
                if ($array[$j][$k] != $nextCharacter) {
                    return $longestPrefix;
                }
            }
            $k++;
            $longestPrefix = "{$longestPrefix}{$nextCharacter}";
        }
    }
}

$object = new LongestCommonPrefix;
echo $object->longestCommonPrefix(['flower', 'floor', 'float']);