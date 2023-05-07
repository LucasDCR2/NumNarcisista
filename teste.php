<?php
function isNarcisistic($number) {
    $sum = 0;
    $numDigits = strlen((string)$number);
    $num = $number;
    while ($num > 0) {
        $digit = $num % 10;
        $digitPower = 1;
        for ($i = 1; $i <= $numDigits; $i++) {
            $digitPower *= $digit;
        }
        $sum += $digitPower;
        $num = (int)($num / 10);
    }
    return $sum == $number;
}

// Solicita ao usuário um número para verificação
$number = intval(readline("Insira um número para verificar se ele é narcisista: "));

// Verifica se o número é narcisista
if (isNarcisistic($number)) {
    echo "$number é narcisista!";
} else {
    echo "$number não é narcisista.";
}
?>