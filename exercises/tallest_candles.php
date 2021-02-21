<?php

function tallestCandles($arr)
{
    $tallest = max($arr);
    $total = array();
    foreach ($arr as $candle) {
        $candle === $tallest ? array_push($total, $candle) : "";
    }
    return count($total);
}

echo tallestCandles([4, 4, 1, 3]);
echo tallestCandles([82, 49, 82, 82, 41, 82, 15, 63, 38, 25]);
echo tallestCandles([3, 2, 1, 3]);
