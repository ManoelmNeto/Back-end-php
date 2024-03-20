<?php
function criptografar($texto) {
    $resultado = '';

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];
        if (ctype_alpha($caractere)) {
            $caractere = chr(ord($caractere) + 3);
        }
        $resultado .= $caractere;
    }

    $resultado = strrev($resultado);

    $metade = strlen($resultado) / 2;
    for ($i = $metade; $i < strlen($resultado); $i++) {
        $caractere = $resultado[$i];
        if (ctype_alpha($caractere)) {
            $caractere = chr(ord($caractere) - 1);
        }
        $resultado[$i] = $caractere;
    }

    return $resultado;
}

$casos_teste = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $casos_teste; $i++) {
    $linha = trim(fgets(STDIN));
    echo criptografar($linha) . PHP_EOL;
}
?>
