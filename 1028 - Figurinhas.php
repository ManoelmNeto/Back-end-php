<?php
function MDC($a, $b) {
    return $b == 0 ? $a : MDC($b, $a % $b);
}

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    list($F1, $F2) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    echo MDC($F1, $F2) . PHP_EOL;
}
?>
