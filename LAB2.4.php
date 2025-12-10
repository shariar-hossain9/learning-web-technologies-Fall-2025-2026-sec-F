<?php
$a = 30;
$b = 40;
$c = 20;
if ($a >= $b && $a >= $c) {
    echo $a . " is the largest number";
} elseif ($b >= $a && $b >= $c) {
    echo $b . " is the largest number";
} else {
    echo $c . " is the largest number";
}
?>