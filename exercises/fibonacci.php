<?php
function fibonacci($start, $max_length, $arr)
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

echo fibonacci(1, 400, [0,1]);
