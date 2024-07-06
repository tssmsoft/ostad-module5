<?php 

function celcius_to_farenhith($celsius) {
    return ($celsius * 9 / 5) + 32;
}

// $farenhite = celcius_to_farenhith(40);
$farenhite = celcius_to_farenhith(32);
printf('%.2f', $farenhite);