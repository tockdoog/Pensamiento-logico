// Función que toma dos números y devuelve un resultado especial
function customOperation(a, b) {
    // Calcula el producto y la suma
    var product = a * b; // Multiplicación
    var sum = a + b;     // Suma
    // Retorna el resultado concatenado como texto
    return product.toString() + sum.toString();
}

// Pruebas de la función
console.log(customOperation(3, 2)); // "63"
console.log(customOperation(4, 8)); // "3212"

