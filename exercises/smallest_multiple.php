<?php

define('DIVISORS', [1, 2, 3, 4, 5, 6, 7, 8, 8, 10]);

function smallest_multiple(int $int): void
{
    $store = array();
    foreach (DIVISORS as $div) {
        if ($int % $div === 0) {
            array_push($store, $div);
            if (DIVISORS === $store) {
                print_r($store);
            }
        } else {
            echo 'no match';
        }
    }
}

smallest_multiple(2520);
