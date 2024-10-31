def solution(num):
    # Inicializa una variable de conteo para rastrear el número de pasos
    count = 0

    # Bucle mientras el número sea mayor que 1
    while num > 1:
        # Incrementa el conteo al inicio de cada iteración
        count += 1

        # Si el número es divisible por 2, divídelo por 2
        if num % 2 == 0:
            num //= 2
            print(f"Módulo 2 de n = 0; {num}")
        # Si el número es igual a 3 o el resto de dividirlo por 4 es 1, resta 1
        elif num % 4 == 1 or num == 3:
            num -= 1
            print(f"Módulo 4 de n = 1 || n = 0; {num}")
        # Si ninguna de las condiciones anteriores se cumple, suma 1 al número
        else:
            num += 1
            print(f"n + 1; {num}")

    # Retorna la variable de conteo
    return count

# Ejemplo de uso
print(solution(15))  # Output: 5