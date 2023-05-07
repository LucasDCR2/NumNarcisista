<?php
function isNarcisistic($numero) {
    $soma = 0;
    $numDigitos = strlen((string)$numero);
    $num = $numero;
    while ($num > 0) {
        $digito = $num % 10;
        $potencia = 1;
        for ($i = 1; $i <= $numDigitos; $i++) {
            $potencia *= $digito;
        }
        $soma += $potencia;
        $num = (int)($num / 10);
    }
    return $soma == $numero;
}

while (true) {
echo PHP_EOL;
echo PHP_EOL;
$numero = intval(readline("Insira um número para verificar se ele é narcisista: "));
echo PHP_EOL;


// Verifica se o número é narcisista
if (isNarcisistic($numero)) {
    echo "$numero é narcisista!";
} else {
    echo "$numero não é narcisista.";
}
}
?>