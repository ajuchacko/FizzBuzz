<?php

class FizzBuzz {

  public function FizzAndBuzz($value)
  {
    return ($this->fizz($value) && $this->buzz($value)) ?  'FizzBuzz' : false;
  }

  public function fizz($value)
  {
    return ($value % 3) ? false : true;
  }

  public function buzz($value)
  {
    return ($value % 5) ? false : true;
  }

  public function fizzOrBuzz($value)
  {
    if($this->fizz($value)){
      return 'Fizz';
    } elseif($this->buzz($value)) {
      return 'Buzz';
    }
  }

  public function SolveFizzOrBuzz($value)
  {
    if($value == 1) {
      return $value;
    } elseif($this->FizzAndBuzz($value)) {
      return 'FizzBuzz';
    } elseif($this->fizzOrBuzz($value)) {
      return $this->fizzOrBuzz($value);
    } else {
      return $value;
    }
  }
  
}
