<?php

function convert_roman($numeral)
{
    $store_count = array();
    $atypical_matches = array();
    $atypical = array(4 => "IV", 9 => "IX", 40 => "XL", 90 => "XC", 400 => "CD", 900 => "CM");
    $typical = array(
        1 => "I",
        5 => "V",
        10 => "X",
        50 => "L",
        100 => "C",
        500 => "D",
        1000 => "M",
    );

    foreach ($atypical as $key => $value) {
        if (str_contains($numeral, $value)) {
            array_push($store_count, $key);
            array_push($atypical_matches, $value);
            //return str_replace($value, "", $numeral);
        }
    }


    $store = [];
    foreach ($atypical_matches as $val) {
        array_push($store, substr($numeral, 0, strpos($numeral, $val)));
    }

    /* $numeralArray = str_split($numeral); */
    /* print_r($numeralArray); */

    /* foreach ($numeralArray as $value) { */
    /*     switch ($value) { */
    /*         case "I": */
    /*             array_push($store_count, 1); */
    /*             break; */
    /*         case "V": */
    /*             array_push($store_count, 5); */
    /*             break; */
    /*         case "X": */
    /*             array_push($store_count, 10); */
    /*             break; */
    /*         case "L": */
    /*             array_push($store_count, 50); */
    /*             break; */
    /*         case "C": */
    /*             array_push($store_count, 100); */
    /*             break; */
    /*         case "D": */
    /*             array_push($store_count, 500); */
    /*             break; */
    /*         case "M": */
    /*             array_push($store_count, 1000); */
    /*             break; */
    /*     } */
    /* } */

    print_r($store_count);
    print_r($store);
}


print_r(convert_roman('MCMXCIV'));
print_r(convert_roman('CCXIV'));
print_r(convert_roman('CMIII'));

print_r(convert_roman('DCCLXIII'));
