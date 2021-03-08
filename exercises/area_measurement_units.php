<?php

declare(strict_types=1);

function area(string $unit, int $length, int $width): string
{
    $area = $length * $width;
    $metres = $area * 0.0929;
    if (is_numeric($length) && is_numeric($width)) {
        if ($unit === 'feet') {
            return "The area is $area square feet";
        } else {
            return "The area is $metres metres squared";
        }
    } else {
        return "Please enter a number";
    }
}

echo area('feet', 15, 20);
echo area('metres', 15, 20);
