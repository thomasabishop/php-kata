<?php
function calculate_tax($shoppingList)
{
    define('TAX_RATE', 5.5);
    $total = 0;
    foreach ($shoppingList as $item) {
        $total += ($item[0] * $item[1]);
    }
    $tax_amount = ($total/100) * TAX_RATE;
    $grand_total = $total + $tax_amount;
    return(' Total minus tax: ' . $total .',' . ' Total tax: ' . $tax_amount . ',' . ' Grand total: ' . $grand_total)  ;
}


$input = array([2,25], [1,10], [1,4]);
print_r(calculate_tax($input));
