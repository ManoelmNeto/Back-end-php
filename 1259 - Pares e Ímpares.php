<?php
function mergeSort(&$vet) {
    $tamanho = count($vet);
    if ($tamanho <= 1) {
        return;
    }
    
    $meio = intval($tamanho / 2);
    $esquerda = array_slice($vet, 0, $meio);
    $direita = array_slice($vet, $meio);
    
    mergeSort($esquerda);
    mergeSort($direita);
    
    $i = $j = $k = 0;
    
    while ($i < count($esquerda) && $j < count($direita)) {
        if ($esquerda[$i] < $direita[$j]) {
            $vet[$k++] = $esquerda[$i++];
        } else {
            $vet[$k++] = $direita[$j++];
        }
    }
    
    while ($i < count($esquerda)) {
        $vet[$k++] = $esquerda[$i++];
    }
    
    while ($j < count($direita)) {
        $vet[$k++] = $direita[$j++];
    }
}

$casos = intval(trim(fgets(STDIN)));
$pares = [];
$impares = [];

for ($i = 0; $i < $casos; $i++) {
    $numero = intval(trim(fgets(STDIN)));
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

mergeSort($pares);
mergeSort($impares);

foreach ($pares as $par) {
    echo "$par\n";
}

foreach (array_reverse($impares) as $impar) {
    echo "$impar\n";
}
?>
