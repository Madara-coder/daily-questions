// Encapulation

class Person {
  setName(name) {
    this.name = name;
    return this.name;
  }

  setAge(age) {
    this.age = age;
    if (this.age > 0) {
      return this.age;
    } else {
      console.log("The age is not valid");
    }
  }

  encapulation() {
    console.log(`I am ${this.name}. I am ${this.age} years old`);
  }
}

let object = new Person();
object.setName("Madara");
object.setAge(20);
object.encapulation();
