Requirements:
Using the latest version of Symfony (http://symfony.com/doc/current/setup.html)

create a simple calculator that can handle the following calculation types: plus,

multiplication, devision.

It is up to you if you use annotations, yaml or xml configuration.

We are not looking for a pretty web page with lots of javascript and css - a basic

layout that works and uses best practises will gain more points.

Please upload your code to github.com when complete and provide us with a link.

This task should take no longer than 1 hour.

Solution:
The application has a simple controller with one entry action that creates and 
handles the form with 2 inputs (which are validated as integers) and 3 buttons 
for each available operation (plus, multiplication and division).

I created a class (SimpleCalculator) for handling the 3 operations, taking into consideration 
the case for division by 0, in which case an exception will be thrown. The class 
implements an Interface which should be a model, in case I want other implementations 
for Calculator. I also create a Factory class that will just create an object of 
SimpleCalculator class.

I also created some basic unit tests for each operation for class SimpleCalculator 
and a test class for the Factory, which will test the creation of the SimpleCalculator.