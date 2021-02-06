<?php

/* 24 is a non-prime number with the prime factors 2 and 3 */
 
function prime_factorization($n)
{
    $store = array();
    while ($n % 2 == 0) {
        echo $n/=2;
    }
    for ($i = 3; $i <= sqrt($n); $i+=2) {
        while ($n % $i == 0) {
            array_push($store, $i);
            $n /= $i;
        }
    }
    if ($n > 2) {
        array_push($store, $n);
    }
    return max($store);
}
var_dump(prime_factorization(600851475143));

// int(6857)
