<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use AppBundle\Calculator;
use AppBundle\CalculatorPackage\CalculatorFactory;

class DefaultController extends Controller
{
    
   /**
    * This represents the entry point where we create the form and handle the submits
    * @Route("/", name="calculator")
    * @Template()
    */
   public function indexAction(Request $request)
   {
        $data = $request->request->get('form');
        $form = $this->createCalculatorForm($data);
        $result = "";
        $form->handleRequest($request);         //handle the submit 
        if ($form->isSubmitted() && $form->isValid()) {   
            $calculator = CalculatorFactory::create();
            try {
                if ($form->get('add')->isClicked()) { //plus operation
                    $result = $calculator->plus($data['first_number'], $data['second_number']);
                } else if ($form->get('divide')->isClicked()) { //divide operation
                    $result = $calculator->divide($data['first_number'], $data['second_number']);
                } else if ($form->get('multiply')->isClicked()) { //multiply operation
                    $result = $calculator->multiply($data['first_number'], $data['second_number']);
                }
            } catch (\Exception $e) {
                $form->addError(new FormError($e->getMessage()));
            }
        }
        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(), 'result' => $result
        ));
   }
   
   /**
    * Function that builds the form with two inputs that will be validated as integers 
    * and 3 buttons for each operation (add, multiply, division)
    * @param type $data
    * @return type
    */
   private function createCalculatorForm($data) 
   {
        return $this->createFormBuilder($data, array(
            'action' => $this->generateUrl('calculator'),
        ))
        ->add('first_number',  IntegerType::class, array('required' => true))
        ->add('second_number', IntegerType::class, array('required' => true))
        ->add('add',           SubmitType::class)
        ->add('divide',        SubmitType::class)
        ->add('multiply',      SubmitType::class)        
        ->getForm();
   }
    
    
}
