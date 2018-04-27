[![BuildStatus](https://travis-ci.org/ajuchacko91/FizzBuzz.svg?branch=master)](https://travis-ci.org/ajuchacko91/FizzBuzz)
# FizzBuzz
Fizz buzz is a group word game for children to teach them about division. Players take turns to count incrementally, replacing any number divisible by three with the word "fizz", and any number divisible by five with the word "buzz".
"FizzBuzz" if the number is divisible by both. Otherwise the number is returned;

# Example

```require 'FizzBuzz.php';

// 1 is returned if parameter is 1
// Fizz is returned if number is divisible by 3
// Buzz is returned if number is divisible by 5
// FizzBuzz is returned if number is divisible by both 3 and 5
// Otherwise number is returned

foreach (range(1,30) as $value) {
  $solve = new FizzBuzz;
  echo $value . '. ' . $solve->SolveFizzOrBuzz($value) . '<br>';
}
```
