# FizzBuzz
Fizz buzz is a group word game for children to teach them about division. Players take turns to count incrementally, replacing any number divisible by three with the word "fizz", and any number divisible by five with the word "buzz".
"FizzBuzz" if the number is divisible by both. Otherwise the number is returned;

# Example

```require 'FizzBuzz.php';

foreach (range(1,30) as $value) {
  $solve = new FizzBuzz;
  echo $value . '. ' . $solve->SolveFizzOrBuzz($value) . '<br>';
}
```
