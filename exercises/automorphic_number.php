<?php

/* A number is called Automorphic number if its square ends in the same digits as the number itself. Create a function that takes a number $n and returns true if it is an Automorphic number, otherwise false.
*/

function isAutomorph($n)
{
    strval($n) === substr($n * $n, -1) ? print_r('true') : print_r('false');
}

echo isAutomorph(28);
