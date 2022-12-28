// 3. Find the nth term in the fibonacci series.

class Fibonacci {
  findFibonacci(first, second, number) {
    let temp;

    for (let i = 0; i <= number; i++) {
      temp = first + second;
      first = second;
      second = temp;
    }
    return console.log(
      `${temp} is the sum value of the ${number} term in fibonacci series`
    );
  }
}

const object = new Fibonacci();
object.findFibonacci(0, 1, 23);
