<?php

class StockBuySell
{
    public function buySell(array $prices)
    {
        $maxProfit = 0;
        $minSoFar = $prices[0];
        // return min($prices);
        // for ($i = 0; $i < count($prices); $i++) {
        //     $minSoFar = min($prices);
        //     $profit = $prices[i] - $minSoFar;
        //     $maxProfit = max($prices);
        // }
    }
    // return $maxProfit;
}

$object = new StockBuySell;
echo "The maximum profit from the given prices is: {$object->buySell([11,23,4,12,1,2])}";