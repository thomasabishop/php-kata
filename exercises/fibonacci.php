<?php

declare(strict_types=1);
function fibonacci(int $start, int $max_length, array $arr): float
{
    $i = $start;
    while (count($arr) < $max_length) {
        array_push($arr, $arr[$i] + $arr[$i - 1]);
        $i++;
    }
    $count_even = 0;
    foreach ($arr as $ele) {
        if ($ele % 2 == 0) {
            $count_even += $ele;
        }
    }
    return $count_even;
}

echo fibonacci(1, 400, [0, 1]);
