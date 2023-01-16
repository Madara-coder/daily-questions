<?php
// Add elements of the two arrays.

class AddArray
{
    public array $l1, $l2;

    public function __construct(array $l1, array $l2)
    {
        $this->l1 = $l1;
        $this->l2 = $l2;
    }

    public function addTwoNumbers(): void
    {
        for ($i = 0; $i < count($this->l1); $i++) {
            $temp[$i] = $this->l1[$i] + $this->l2[$i];
            echo "{$temp[$i]},";
        }
    }

}

$object = new AddArray(
    [2, 4, 3],
    [5, 6, 4]
);

$object->addTwoNumbers();
