
// 4. Implement linear/sequential Search Algorithm to find whetehr the nubner is present in the array or not.

class LinearSearch
{
    LinearSearch(a = {}, arraySize, num)
    {
        for (let i = 0; i <= arraySize; i++) {
            if (a[i] === num) {
                return console.log(`${num} found in ${i+1}th place of the array`);
            }
        }
        return console.log(`${num} not found in the given array`);
    }
}

object = new LinearSearch;
object.LinearSearch(
    [1, 5, 10, 15, 20, 25, 30, 35, 40, 45],
    10,
    20
);