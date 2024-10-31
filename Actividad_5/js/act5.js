export function solution(num) {
  // Initialize a count variable to keep track of the number of steps
  let count = 0;
  // Loop while the number is greater than 1
  while (num > 1) {
    // Increment the count at the start of each iteration
    count++;
    // If the number is divisible by 2, divide it by 2
    if (num % 2 === 0) {
      num = Math.floor(num / 2);
      console.log("Mádulo 2 de n = 0; " + num)
    }
    // If the number is equal to 3 or the remainder of dividing it by 4 is 1, subtract 1
    else if (num % 4 === 1 || num === 3) {
      num -= 1;
      console.log("Mádulo 4 de n = 1 || n = 0; " + num)
    }
    // If none of the above conditions are met, add 1 to the number
    else {
      num += 1;
      console.log("n + 1; " + num)
    }
  }
  // return the count variable
  return count;
}