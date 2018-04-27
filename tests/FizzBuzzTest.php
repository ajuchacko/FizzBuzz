<?php
require 'FizzBuzz.php';
use PHPUnit\Framework\TestCase;

class FizzBuzz extends TestCase {

  protected $c;
  protected $result_set = ['Fizz', 'Buzz'];

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
    $this->assertTrue(true , $this->c->FizzAndBuzz(30) );
  }

  public function testFizzOrBuzz()
  {
    $result = $this->c->fizzOrBuzz(3);
    $this->assertSame('Fizz', $this->result_set[array_search($result, $this->result_set)]);
    $result = $this->c->fizzOrBuzz(5);
    $this->assertSame('Buzz', $this->result_set[array_search($result, $this->result_set)]);
  }

  public function testSolveFizzOrBuzz()
  {
    $result1 = $this->c->SolveFizzOrBuzz(1);
    $result2 = $this->c->SolveFizzOrBuzz(2);
    $result9 = $this->c->SolveFizzOrBuzz(9);
    $result10 = $this->c->SolveFizzOrBuzz(10);
    $result15 = $this->c->SolveFizzOrBuzz(15);
    $this->assertSame($result1, "1");
    $this->assertSame($result2, "2");
    $this->assertSame($result9, 'Fizz');
    $this->assertSame($result10, 'Buzz');
    $this->assertSame($result15, 'FizzBuzz');
  }
}
