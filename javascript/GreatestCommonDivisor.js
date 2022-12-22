// 1. Write a program to find the GCD (Greatest Common Divisor) of the given two numbers.

class GreatestCommonDivisor {
  findGcd(a, b) {
    if (a === 0) {
      return console.log(`${b} is the GCD`);
    } else if (b === 0) {
      return console.log(`${a} is the GCD`);
    } else {
      while (b != 0) {
        let rem = a % b;
        a = b;
        b = rem;
      }
      return console.log(`${a} is the GCD`);
    }
  }
}

const object = new GreatestCommonDivisor();
object.findGcd(4, 80);
