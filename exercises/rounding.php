<?php

function calculate_total_paint($length, $width)
{
    define('GALLON', 350);
    $totalArea = $length * $width;
    $purchaseAmount = ceil($totalArea / GALLON);
    return "You will need to purchase $purchaseAmount gallons of paint to cover $totalArea square feet";
}
//echo calculate_total_paint(180, 2);

var_dump(calculate_total_paint(180, 2));
// Add variants for L-shaped and circular room
