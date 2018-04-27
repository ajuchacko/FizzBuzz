<?php
declare(strict_types=1);

class FizzBuzz {

  /*
  * @param int - gives true if value is divisible by 3 and 5
  * return boolean
  */
  public function FizzAndBuzz($value) : bool
  {
    return ($this->fizz($value) && $this->buzz($value)) ?  true : false;
  }

  /*
  * @param int - gives true if value is divisible by 3
  * return boolean
  */
  public function fizz($value) : bool
  {
    return ($value % 3) ? false : true;
  }

  /*
  * @param int - gives true if value is divisible by 5
  * return boolean
  */
  public function buzz($value) : bool
  {
    return ($value % 5) ? false : true;
  }

  /*
  * @param int - checks parameter is fizz or buzz
  * return string
  */
  public function fizzOrBuzz($value) :string
  {
    if($this->fizz($value)){
      return 'Fizz';
    } elseif($this->buzz($value)) {
      return 'Buzz';
    }
    return (string) 0;
  }
  
  /*
  * @param int - Determines the given parameter is fizz, buzz or fizzbuzz, Otherwise the number is returned.
  * return string
  */

  public function SolveFizzOrBuzz($value) :string
  {
    if($value == 1) {
      return (string) $value;
    } elseif($this->FizzAndBuzz($value)) {
      return 'FizzBuzz';
    } elseif($this->fizzOrBuzz($value)) {
      return $this->fizzOrBuzz($value);
    } else {
      return (string) $value;
    }
  }
}
