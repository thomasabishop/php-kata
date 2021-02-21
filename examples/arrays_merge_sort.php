<?php
$first = array(1, 5, 8, 10);
$second = array(2, 3, 4, 9);

$merged = array_merge($first, $second);

asort($merged); // you can't store this in a var, it will just return a boolean

echo var_dump($merged);
