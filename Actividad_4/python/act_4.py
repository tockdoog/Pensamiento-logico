# Función que toma dos números y devuelve un resultado especial
def custom_operation(a, b):
    # Calcula el producto y la suma
    product = a * b  # Multiplicación
    sum_result = a + b  # Suma
    # Retorna el resultado concatenado
    return str(product) + str(sum_result)

# Pruebas de la función
print(custom_operation(3, 2))  # "63"
print(custom_operation(4, 8))  # "3212"

