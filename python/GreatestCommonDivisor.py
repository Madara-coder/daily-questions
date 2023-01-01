# 1. Write a program to find the GCD (Greatest Common Divisor) of the given two numbers.

class GreatestCommonDivisor:
    def findGcd(firstNo, secondNo):
        if firstNo == 0:
            print(f"{secondNo} is the GCD")
        elif secondNo == 0:
            print(f"{firstNo} is the GCD")
        else:
            while secondNo != 0:
                remainder = firstNo % secondNo
                firstNo = secondNo
                secondNo = remainder
            print(f"{firstNo} is the GCD")

object = GreatestCommonDivisor
object.findGcd(10, 20)
