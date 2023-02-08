<?php

// leetCode question: 118

class PascalTree
{
    public function pascalTree(): void
    {
        $row = 7;
        $column = 1;
        echo "<----------PASCAL'S TRIANGLE-------------->";
        for ($i = 0; $i < $row; $i++) {
            echo "\t";
            for ($ws = 1; $ws <= $row - $i; $ws++) {
                echo " ";
            }

            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $i == 0) {
                    $column = 1;
                } else {
                    $column = $column * ($i - $j + 1) / $j;
                    echo $column . "  ";
                }
                echo "\n";
            }
        }
    }
}

$object = new PascalTree;
$object->pascalTree();