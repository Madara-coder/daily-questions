<?php

// Write a program to find whether the person's height is tall, normal, ....

class HeightComaparison
{
    public function personHeight(int $height): string
    {
        if ($height <= 155) {
            return "You are a dwarf";
        } elseif ($height >=156 && $height <= 175) {
            return "You are of average height";
        } elseif ($height >= 176 && $height <= 210) {
            return "You lie in tall category";
        } else {
            return "You are a BAKEMONO";
        }
    }
}

$object = new HeightComaparison;
echo $object->personHeight(300);
