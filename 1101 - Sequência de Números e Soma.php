<?php
$soma = 0;

fscanf(STDIN, "%d %d", $m, $n);

while ($m > 0 && $n > 0) {
    if ($m > $n) {
        $aux = $n;
        for (; $n <= $m; $n++) {
            $soma += $n;
        }

        for (; $aux <= $m; $aux++) {
            echo $aux . " ";
        }
        echo "Sum=" . $soma . "\n";
        $soma = 0;
        fscanf(STDIN, "%d %d", $m, $n);
    }

    if ($m < $n) {
        $aux = $m;
        for (; $m <= $n; $m++) {
            $soma += $m;
        }

        for (; $aux <= $n; $aux++) {
            echo $aux . " ";
        }
        echo "Sum=" . $soma . "\n";
        $soma = 0;
        fscanf(STDIN, "%d %d", $m, $n);
    }
}
?>
