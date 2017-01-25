<?php

namespace Tests\AppBundle\CalculatorPackage;

use AppBundle\CalculatorPackage\SimpleCalculator;

class SimpleCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * tests assembly between 2 non-zero integers
     */
    public function testPlusWithNoZeroValuesSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->plus(10, 5);
        $this->assertEquals(15, $result);
    }
    
     /**
     * tests assembly with 0 
     */
    public function testPlusWithZeroValuesSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->plus(10, 0);
        $this->assertEquals(10, $result);
    }
    
    /**
     * tests assembly between 2 negative integers
     */
    public function testPlusNegativeNumbersSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->plus(-80, -10);
        $this->assertEquals(-90, $result);
    }
    
   /**
    * tests assembly between a negative and a positive integer
    */
    public function testPlusOneNegativeOnePositiveSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->plus(70, -10);
        $this->assertEquals(60, $result);
    }
    
   /**
    * tests the multiplication between non zero integers
    */
    public function testMultiplyWithNoZeroValuesSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->multiply(50, 1);
        $this->assertEquals(50, $result);
    }
    
    
   /**
    * tests the multiplication with 0
    */
    public function testMultiplyWithZeroValuesSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->multiply(10, 0);
        $this->assertEquals(0, $result);
    }
    
    
   /**
    * tests the multiplication between 2 negative integers
    */
    public function testMultiplyNegativeNumbersSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->multiply(-10, -80);
        $this->assertEquals(800, $result);
    }
    
   /**
    * tests the multiplication between one negative and one positive integer
    */
    public function testMultiplyOneNegativeOnePositiveSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->multiply(-10, 70);
        $this->assertEquals(-700, $result);
    }
    
   /**
    * tests the division between non-zero operands
    */
    public function testDivideWithNoZeroValuesSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->divide(10, 5);
        $this->assertEquals(2, $result);
    }
    
    
   /**
    * tests the division by 0
    */
    public function testDivideByZeroExpectsException()
    {
        try {
            $calculator = new SimpleCalculator();
            $result = $calculator->divide(10, 0);
        } catch (\Exception $ex) {
            $this->assertEquals($ex->getMessage(), "Division by 0!");
            return;
        }
        $this->fail("Expected Exception has not been raised.");
    }
    
    /**
     * tests the division between 2 negatives integers
     */
    public function testDivideNegativeNumbersSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->divide(-10, -10);
        $this->assertEquals(1, $result);
    }
    
    
    /**
     * tests the division between one negative and one positive integer
     */
    public function testDivideOneNegativeOnePositiveSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->divide(-70, 10);
        $this->assertEquals(-7, $result);
    }
    
    /**
     * tests the division with a decimal result
     */
    public function testDivideWithDecimalResultSuccessful()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->divide(25, 2);
        $this->assertEquals(12.5, $result);
    }
    
   
}