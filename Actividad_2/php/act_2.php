function solution($numbers) {
    // Definimos los números base del 3 al 8
    $baseNumbers = [3, 4, 5, 6, 7, 8];

    // Creamos un array para almacenar los factores multiplicadores
    $factors = [];

    // Iteramos sobre los números base y los resultados
    for ($i = 0; $i < count($baseNumbers); $i++) {
        // Verificamos que no haya división por cero
        if ($baseNumbers[$i] == 0) {
            return false; // O manejar el error de otra forma
        }
        // Calculamos el factor multiplicador (x)
        $factor = $numbers[$i] / $baseNumbers[$i];
        // Agregamos el factor al array de factores
        $factors[] = $factor;
    }

    // Usamos array_unique para encontrar factores únicos
    $uniqueFactors = array_unique($factors);

    // Verificamos si todos los factores son iguales
    if (count($uniqueFactors) === 1) {
        // Si solo hay un factor único, lo retornamos como entero
        return intval($factors[0]);
    } else {
        // Si hay más de un factor, retornamos false
        return false;
    }
}

// Ejemplos de uso
var_dump(solution([27, 36, 45, 54, 63, 72])); // Salida: 9
var_dump(solution([27, 36, 45, 54, 42, 72])); // Salida: false