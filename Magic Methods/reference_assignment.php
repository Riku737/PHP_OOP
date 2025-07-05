<?php

$a = 5;
$b = &$a; 
// The ampersand in front of the variable denotes reference assignment in memory (not value assignment)

$a = 2;

echo $b;
// 2 because $b points to the same place in memory as $a

/**
 * OOP is always assigned by reference
 * Variables reference an object identifier
 * Assignment is coping the identifier variable
 */

?>