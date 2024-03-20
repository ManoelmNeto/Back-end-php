<?php
$leds = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);

fscanf(STDIN, "%d\n", $N);

for ($i = 0; $i < $N; ++$i) {
    fscanf(STDIN, "%s", $V);

    $resposta = 0;
    for ($j = 0; $j < strlen($V); ++$j) {
        $resposta += $leds[$V[$j] - '0'];
    }

    echo "$resposta leds\n";
}
?>
