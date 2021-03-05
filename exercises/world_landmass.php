<?php

function area_of_country($name, $area)
{
    define('TOTAL_WORLD_LANDMASS', 148940000);
    $country_area = round(($area / TOTAL_WORLD_LANDMASS) * 100, 2);
    print_r($name . " is " . $country_area . " % of the total world's landmass");
}

print_r(area_of_country("USA", 9372610));
