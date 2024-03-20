<?php
while ($n = intval(trim(fgets(STDIN)))) {
    $vetor = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $maior = $vetor[0];
    foreach ($vetor as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }

    if ($maior < 10) {
        echo "1\n";
    } elseif ($maior >= 10 && $maior < 20) {
        echo "2\n";
    } elseif ($maior >= 20) {
        echo "3\n";
    }
}
?>
