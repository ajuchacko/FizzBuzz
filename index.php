<?php

 require 'FizzBuzz.php';

 // 1 is returned if parameter is 1
 // Fizz is returned if number is divisible by 3
 // Buzz is returned if number is divisible by 5
 // FizzBuzz is returned if number is divisible by both 3 and 5
 // Otherwise number is returned
 
 foreach (range(1,100) as $value) {
   $solve = new FizzBuzz;
   echo $value . '. ' . $solve->SolveFizzOrBuzz($value) . '<br>';
 }
