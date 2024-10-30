export function solution(numbers) {
  // Definimos los números base del 3 al 8
  const baseNumbers = [3, 4, 5, 6, 7, 8];
  
  // Creamos un array para almacenar los factores multiplicadores
  const factors = [];

  // Iteramos sobre los números base y los resultados
  for (let i = 0; i < baseNumbers.length; i++) {
    // Calculamos el factor multiplicador (x)
    const factor = numbers[i] / baseNumbers[i];
    // Agregamos el factor al array de factores
    factors.push(factor);
  }

  // Usamos un Set para encontrar factores únicos
  const uniqueFactors = new Set(factors);

  // Verificamos si todos los factores son iguales
  if (uniqueFactors.size === 1) {
    // Si solo hay un factor único, lo retornamos
    return factors[0];
  } else {
    // Si hay más de un factor, retornamos false
    return false;
  }
}

// Ejemplos de uso
console.log(solution([27, 36, 45, 54, 63, 72])); // Salida: 9
console.log(solution([27, 36, 45, 54, 42, 72])); // Salida: false
