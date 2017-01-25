<?php

namespace Tests\AppBundle;

use AppBundle\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * tests assembly between 2 non-zero integers
     */
    public function testAddWithNoZeroValuesPasses()
    {
        $result = Calculator::add(10, 5);
        $this->assertEquals(15, $result);
    }
    
     /**
     * tests assembly with 0 
     */
    public function testAddWithZeroValuesPasses()
    {
        $result = Calculator::add(10, 0);
        $this->assertEquals(10, $result);
    }
    
    /**
     * tests assembly between 2 negative integers
     */
    public function testAddNegativeNumbersPasses()
    {
        $result = Calculator::add(-10, -80);
        $this->assertEquals(-90, $result);
    }
    
   /**
    * tests assembly between a negative and a positive integer
    */
    public function testAddOneNegativeOnePositivePasses()
    {
        $result = Calculator::add(-10, 70);
        $this->assertEquals(60, $result);
    }
    
   /**
    * tests the multiplication between non zero integers
    */
    public function testMultiplyWithNoZeroValuesPasses()
    {
        $result = Calculator::multiply(10, 5);
        $this->assertEquals(50, $result);
    }
    
    
   /**
    * tests the multiplication with 0
    */
    public function testMultiplyWithZeroValuesPasses()
    {
        $result = Calculator::multiply(10, 0);
        $this->assertEquals(0, $result);
    }
    
    
   /**
    * tests the multiplication between 2 negative integers
    */
    public function testMultiplyNegativeNumbersPasses()
    {
        $result = Calculator::multiply(-10, -80);
        $this->assertEquals(800, $result);
    }
    
   /**
    * tests the multiplication between one negative and one positive integer
    */
    public function testMultiplyOneNegativeOnePositivePasses()
    {
        $result = Calculator::multiply(-10, 70);
        $this->assertEquals(-700, $result);
    }
    
   /**
    * tests the division between non-zero operands
    */
    public function testDivideWithNoZeroValuesPasses()
    {
        $result = Calculator::divide(10, 5);
        $this->assertEquals(2, $result);
    }
    
    
   /**
    * tests the division by 0
    */
    public function testDivideByZeroExpectsException()
    {
        try {
            Calculator::divide(10, 0);
        } catch (\Exception $ex) {
            $this->assertEquals($ex->getMessage(), "Division by 0!");
            return;
        }
        $this->fail("Expected Exception has not been raised.");
    }
    
    /**
     * tests the division between 2 negatives integers
     */
    public function testDivideNegativeNumbersPasses()
    {
        $result = Calculator::divide(-80, -80);
        $this->assertEquals(1, $result);
    }
    
    
    /**
     * tests the division between one negative and one positive integer
     */
    public function testDivideOneNegativeOnePositivePasses()
    {
        $result = Calculator::divide(-70, 10);
        $this->assertEquals(-7, $result);
    }
    
    /**
     * tests the division with a decimal result
     */
    public function testDivideWithDecimalResultPasses()
    {
        $result = Calculator::divide(25, 2);
        $this->assertEquals(12.5, $result);
    }
}