<?php

class RupeshDaiQuestion
{
    public function explodeConvert(string $string): void
    {
        $array = explode(', ', $string);
        print_r($array);
    }

    public function strConvert(string $string): void
    {
        $array = str_split($string, 10);
        print_r($array);
    }

    public function pregConvert(string $string): void
    {
        $array = preg_split(":", $string, 0, PREG_SPLIT_DELIM_CAPTURE);
        print_r($array);
    }

    public function jsonConvert(string $string): void
    {
        $array = json_decode($string);
        print_r($array);
    }

    public function serialConvert(string $string): void
    {
        $array = serialize($string);
        print_r($array);
    }

    public function unserialConvert(string $string): void
    {
        $array = unserialize($string);
        print_r($array);
    }
}

$object = new RupeshDaiQuestion;
echo $output = $object->serialConvert("2016-12-2: log line[warning], 2016-12-2: log line[Error], 2016-12-3: log line[Error]");
// echo $output = $object->unserialConvert('a:3:{i:0;s:1:"a";i:1;s:6:"sample";i:2;s:6:"string";}');
// echo "The converted is : {$output}";
// $object->convert("2016-12-12: log line[warning]");
