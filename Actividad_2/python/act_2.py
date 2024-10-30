def solution(numbers):
    # Definimos los números base del 3 al 8
    base_numbers = [3, 4, 5, 6, 7, 8]
    
    # Creamos una lista para almacenar los factores multiplicadores
    factors = []

    # Iteramos sobre los números base y los resultados
    for i in range(len(base_numbers)):
        # Calculamos el factor multiplicador (x)
        factor = numbers[i] / base_numbers[i]
        # Agregamos el factor a la lista de factores
        factors.append(factor)

    # Usamos set para encontrar factores únicos
    unique_factors = set(factors)

    # Verificamos si todos los factores son iguales
    if len(unique_factors) == 1:
        # Si solo hay un factor único, lo retornamos
        return factors[0]
    else:
        # Si hay más de un factor, retornamos False
        return False

# Ejemplos de uso
print(solution([27, 36, 45, 54, 63, 72]))  # Salida: 9
print(solution([27, 36, 45, 54, 42, 72]))  # Salida: False

