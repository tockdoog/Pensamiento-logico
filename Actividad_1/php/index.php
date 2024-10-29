<?php

function solution($num1, $num2) {
    // aquí se hace el cálculo
    $resta = $num1 - $num2;
    $suma = $num1 + $num2;

    // concatenar los resultados
    $resultado = intval("{$resta}{$suma}");
    return $resultado;
}

// Llamadas a la función y mostrar resultados
echo solution(5, 4) . "\n";
echo solution(8, 2) . "\n";
echo solution(10, 8) . "\n";
echo solution(12, 9) . "\n";
echo solution(18, 2) . "\n";
echo solution(21, 5) . "\n";

?>