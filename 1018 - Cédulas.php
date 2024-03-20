<?php
$N = intval(trim(fgets(STDIN)));

echo "$N\n";

echo intval($N/100) . " nota(s) de R$ 100,00\n";
$N %= 100;
echo intval($N/50) . " nota(s) de R$ 50,00\n";
$N %= 50;
echo intval($N/20) . " nota(s) de R$ 20,00\n";
$N %= 20;
echo intval($N/10) . " nota(s) de R$ 10,00\n";
$N %= 10;
echo intval($N/5) . " nota(s) de R$ 5,00\n";
$N %= 5;
echo intval($N/2) . " nota(s) de R$ 2,00\n";
$N %= 2;
echo intval($N) . " nota(s) de R$ 1,00\n";
?>
