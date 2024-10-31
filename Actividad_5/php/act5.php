function solution($num) {
    // Inicializa una variable de conteo para rastrear el número de pasos
    $count = 0;

    // Bucle mientras el número sea mayor que 1
    while ($num > 1) {
        // Incrementa el conteo al inicio de cada iteración
        $count++;

        // Si el número es divisible por 2, divídelo por 2
        if ($num % 2 === 0) {
            $num = floor($num / 2);
            echo "Módulo 2 de n = 0; " . $num . "\n";
        }
        // Si el número es igual a 3 o el resto de dividirlo por 4 es 1, resta 1
        else if ($num % 4 === 1 || $num === 3) {
            $num -= 1;
            echo "Módulo 4 de n = 1 || n = 0; " . $num . "\n";
        }
        // Si ninguna de las condiciones anteriores se cumple, suma 1 al número
        else {
            $num += 1;
            echo "n + 1; " . $num . "\n";
        }
    }

    // Retorna la variable de conteo
    return $count;
}

// Ejemplo de uso
echo solution(15); // Output: 5