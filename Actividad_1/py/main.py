def solution(num1, num2):
    # aquí se hace el cálculo
    resta = num1 - num2
    suma = num1 + num2

    # concatenar los resultados
    resultado = int(f"{resta}{suma}")
    return resultado

print(solution(5, 4))
print(solution(8, 2))
print(solution(10, 8))
print(solution(12, 9))
print(solution(18, 2))
print(solution(21, 5))