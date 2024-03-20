<?php
$X = intval(trim(fgets(STDIN)));
$Y = intval(trim(fgets(STDIN)));

if ($Y < $X) {
    $aux = $X;
    $X = $Y;
    $Y = $aux;
}

for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>
