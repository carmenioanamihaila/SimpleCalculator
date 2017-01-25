<?php
namespace AppBundle\CalculatorPackage;

use AppBundle\CalculatorPackage\ICalculator;
/**
 * Class that is responsible for different math operations
 */
class SimpleCalculator implements ICalculator
{
    
    /*
     * Adds two integers
     * @return type     
     * 
     */
    public function plus($firstOperand, $secondOperand)
    {
        return $firstOperand + $secondOperand;
    }

    /*
     * Multiplies two integers
     * @return type     
     * 
     */
    public function divide($firstOperand, $secondOperand)
    {
        if (intval($secondOperand) != 0) {
            return $firstOperand / $secondOperand;
        } else { //in case the second operand is a zero, an exception will be thrown
            throw new \Exception("Division by 0!");
        }
    }

    /*
     * Divides two integers
     * @return type     
     * 
     */
    public function multiply($firstOperand, $secondOperand)
    {
        return $firstOperand * $secondOperand;
    }
}

