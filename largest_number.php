<?php 

function largest_number($a, $b, $c) {
    //return max($a, $b, $c);
    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }
    return $max;
}

// echo largest_number(-2, 0, 1);
echo largest_number(4,5,6);