<?php

// leetCode question: 51
//The n-queens puzzle is the problem of placing n queens on an n x n chessboard such that no two queens attack each other.
// Given an integer n, return all distinct solutions to the n-queens puzzle. You may return the answer in any order.
// Each solution contains a distinct board configuration of the n-queens' placement, where 'Q' and '.' both indicate a
// queen and an empty space, respectively.

// Solution:

class NQueenPuzzle
{

    /**
     * @param Integer $n
     * @return String[][]
     */

    protected $res=[];
    protected $board;
    protected $colHash;
    protected $posDiag;
    protected $negDiag;

    function solveNQueens(int $n): array
    {
        //fill board with dots
        $this->board = [];
        for ($i = 0; $i < $n; $i++) {
            $this->board[$i] = [];
            for ($j = 0; $j < $n; $j++) {
                $this->board[$i][$j] = '.';
            }
        }
        $this->colHash=[];
        $this->posDiag=[];
        $this->negDiag=[];
        $this->backtrack(0, $n);
        return $this->res;
    }

    function backtrack(int $r,int $n)
    {
        if ($r == $n){
            $copy = $this->board;
            for ($i = 0; $i < $n; $i++) {
                $copy[$i] = implode($copy[$i]);
            }
            array_push($this->res, $copy);
            return;
        }
        for($c = 0; $c < $n; $c++) {
            if (isset($this->colHash[$c]) || isset($this->posDiag[$r+$c]) || isset($this->negDiag[$r-$c])) {
                continue;
            }
            $this->colHash[$c]=1;
            $this->posDiag[$r+$c]=1;
            $this->negDiag[$r-$c]=1;
            $this->board[$r][$c]='Q';
            $this->backtrack($r+1,$n);

            //clean for next c iteration
            unset($this->colHash[$c]);
            unset($this->posDiag[$r+$c]);
            unset($this->negDiag[$r-$c]);
            $this->board[$r][$c]='.';
        }
    }
}

$object = new NQueenPuzzle;
print_r($object->solveNQueens(8));