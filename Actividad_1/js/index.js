function solution(num1, num2) {
  // aquí se hace el cálculo
  let resta = (num1 - num2);
  let suma = (num1 + num2);

  // concatenar los resultados
  let resultado = parseInt(`${resta}${suma}`);
  return resultado;
}

console.log(solution(5, 4));
console.log(solution(8, 2));
console.log(solution(10, 8));
console.log(solution(12, 9));
console.log(solution(18, 2));
console.log(solution(21, 5));