<?php
function fibonacci($n) {
    // Inicializa os primeiros números da sequência de Fibonacci
    $fib = [0, 1];

    // Gera a sequência de Fibonacci até o número informado ou até passá-lo
    while ($fib[count($fib) - 1] < $n) {
        $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
    }

    return $fib;
}

function pertenceAFibonacci($n) {
    $fib = fibonacci($n);

    // Verifica se o número informado pertence à sequência
    if (in_array($n, $fib)) {
        return "O número $n pertence à sequência de Fibonacci.";
    } else {
        return "O número $n NÃO pertence à sequência de Fibonacci.";
    }
}

// Número a ser verificado
$numero = 21; 

// Exibe o resultado
echo pertenceAFibonacci($numero);
?>
