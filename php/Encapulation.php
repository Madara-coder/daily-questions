<?php

// Encapulation

class Person
{
    private string $name;
    private int $age;

    public function setName(string $name): string
    {
        $this->name = $name;
        return $this->name;
    }

    public function setAge(int $age): int
    {
        $this->age = $age;
       if ($this->age > 0) {
            return $this->age;
       } else {
            throw new Exception("The age is not valid");
       }
    }

    public function encapulation(): string
    {
        return ("I am {$this->name}. I am {$this->age} years old");
    }

}

$object = new Person();
$object->setName("Debrath");
$object->setAge(20);
$object->encapulation();