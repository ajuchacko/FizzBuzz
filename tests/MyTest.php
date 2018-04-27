<?php
require 'FizzBuzz.php';
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {

  protected $c;

  public function setUp()
  {
    $this->c = new FizzBuzz;
  }

  public function testInstantiation()
  {
    $this->assertNotNull($this->c,'Class Instantiation');
  }

  public function testFizz()
  {
    $result = $this->c->fizz(3);
    $this->assertTrue($result);
  }

  public function testBuzz()
  {
    $result = $this->c->buzz(5);
    $this->assertTrue($result);
  }

  public function testFizzAndBuzz()
  {
    $this->assertEquals('FizzBuzz', $this->c->FizzAndBuzz(30) );
  }

  public function testFizzOrBuzz()
  {
    $result_set = ['Fizz', 'Buzz'];
    $result = $this->c->fizzOrBuzz(3);
    $this->assertEquals('Fizz', $result_set[array_search($result, $result_set)]);
    $result = $this->c->fizzOrBuzz(5);
    $this->assertEquals('Buzz', $result_set[array_search($result, $result_set)]);
  }

  public function testSolveFizzOrBuzz()
  {
    $result1 = $this->c->SolveFizzOrBuzz(1);
    $result2 = $this->c->SolveFizzOrBuzz(2);
    $result9 = $this->c->SolveFizzOrBuzz(9);
    $result10 = $this->c->SolveFizzOrBuzz(10);
    $result15 = $this->c->SolveFizzOrBuzz(15);
    $this->assertEquals($result1, 1);
    $this->assertEquals($result2, 2);
    $this->assertEquals($result9, 'Fizz');
    $this->assertEquals($result10, 'Buzz');
    $this->assertEquals($result15, 'FizzBuzz');

  }
}
