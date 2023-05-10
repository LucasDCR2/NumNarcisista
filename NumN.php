<?php
function isNarcisistic($numero) {
    $soma = 0;
    $numDigitos = strlen((string)$numero);          // obtém o número de dígitos do número
    $num = $numero;                                 //fazendo um cast do número para string
    while ($num > 0) {
        $digito = $num % 10;                        // obtém o último dígito do número      
        $potencia = 1;
        for ($i = 1; $i <= $numDigitos; $i++) {     // Loop for eleva o dígito à potência correspondente
            $potencia *= $digito;                   // Potencia é * Digito até que o contador $i seja igual aos digitos
        }
        $soma += $potencia;                         // adiciona a potência à soma
        $num = (int)($num / 10);                    // remove o último dígito do número até que num seja <0
    }
    return $soma == $numero;                        // retorna true se a soma for igual ao número
}

while (true) {
echo PHP_EOL;
echo PHP_EOL;
$numero = intval(readline("Insira um número para verificar se ele é narcisista: "));
// input recebe o valor colocado e transforma em int
echo PHP_EOL;


// Verifica se o número é narcisista
if (isNarcisistic($numero)) {
    echo "$numero é narcisista!";
} else {
    echo "$numero não é narcisista.";
}
}
?>