<?php
$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $alfabeto = trim(fgets(STDIN));
    $deslocamento = intval(trim(fgets(STDIN)));

    $resposta = '';
    for ($j = 0; $j < strlen($alfabeto); $j++) {
        $letra = $alfabeto[$j];
        $nova_letra_ascii = ((ord($letra) - 65 - $deslocamento + 26) % 26) + 65;
        $nova_letra = chr($nova_letra_ascii);
        $resposta .= $nova_letra;
    }

    echo "$resposta\n";
}
?>
