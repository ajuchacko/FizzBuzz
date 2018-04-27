# FizzBuzz
Fizz buzz is a group word game for children to teach them about division. Players take turns to count incrementally, replacing any number divisible by three with the word "fizz", and any number divisible by five with the word "buzz".

# Example

```require 'FizzBuzz.php';

foreach (range(1,10) as $value) {
  $solve = new FizzBuzz;
  echo $value . '. ' . $solve->SolveFizzOrBuzz($value) . '<br>';
}
```
