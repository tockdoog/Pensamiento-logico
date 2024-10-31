<?php
// Función que toma dos números y devuelve un resultado especial
function customOperation($a, $b) {
    // Calcula el producto y la suma
    $product = $a * $b; // Multiplicación
    $sum = $a + $b;     // Suma
    // Retorna el resultado concatenado
    return $product . $sum;
}

// Pruebas de la función
echo customOperation(3, 2); // "63"
echo customOperation(4, 8); // "3212";
?>

