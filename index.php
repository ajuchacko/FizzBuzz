<?php

 require 'FizzBuzz.php';

 foreach (range(1,1000) as $value) {
   $solve = new FizzBuzz;
   echo $value . '. ' . $solve->SolveFizzOrBuzz($value) . '<br>';
 }
