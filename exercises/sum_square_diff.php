<?php
/* Find the difference between the sum of the squares for the first one hundred natural numbers and the square of the sum */

declare(strict_types=1);

function sum_square_diff(int $maximum): int
{
    $sum_of_squares = 0;
    $raw_sum = 0;
    function square(int $x): int
    {
        return $x * $x;
    }

    for ($i = 1; $i <= $maximum; $i++) {
        $sum_of_squares += square($i);
        $raw_sum += $i;
    }

    $square_of_sum = square($raw_sum);
    return $square_of_sum - $sum_of_squares;
}

print_r(sum_square_diff(100));
