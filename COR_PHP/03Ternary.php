<?php 

// == : checks for the values 
// === : checks for the values along with its type

$op = "f";
$x ="1";
$y =1;

// $res = (1!=1) ? "t": $op;

// $res = (1>1 || 1==1) ? "t": $op;

// $res = !(1==1) ? "t": $op;

$res = ($x === $y) ? "t": $op;

echo $res;


?>