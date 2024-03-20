<?php
$x = intval(trim(fgets(STDIN)));
$y = intval(trim(fgets(STDIN)));

$soma = 0;

if ($x > $y) {
    $x--;
    while ($x > $y) {
        if ($x % 2 != 0) {
            $soma += $x;
        }
        $x--;
    }
}

if ($y > $x) {
    $y--;
    while ($y > $x) {
        if ($y % 2 != 0) {
            $soma += $y;
        }
        $y--;
    }
}

echo $soma;
?>
