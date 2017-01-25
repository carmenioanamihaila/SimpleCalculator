<?php
namespace AppBundle\CalculatorPackage;

interface ICalculator
{
    /*
     * Adds two integers 
     */
    public function plus($firstOperand, $secondOperand);
    
    /*
     * Multiplies two integers
     */
    public function divide($firstOperand, $secondOperand);

    /*
     * Divides two integers
     */
    public function multiply($firstOperand, $secondOperand);
}

