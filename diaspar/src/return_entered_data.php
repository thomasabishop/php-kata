<?php

declare(strict_types=1);

function returnEnteredFormData(array $fields): void
{
	foreach ($fields as $val) {
		echo $val;
	}
}

$arr = ['a', 'b', 'c'];
print_r(returnEnteredFormData($arr));
