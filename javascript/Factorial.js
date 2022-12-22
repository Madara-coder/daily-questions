// 2. Find the factorial of a given number. (Using recursion)

class Factorial {
  static factorialize(number) {
    if (number > 0) {
      return number + this.factorialize(number - 1);
    } else if (number < 0) {
      return console.log("The number is invalid");
    } else {
      return console.log("The number is zero so the factorial is 1");
    }
  }
}

let object = new Factorial;
object.factorialize(12);


