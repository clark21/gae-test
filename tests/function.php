<?php
require_once(__DIR__.'/../math.php');

class FunctionTest extends \PHPUnit_Framework_TestCase 
{ 
    protected $a = 19;
    protected $b = 8;
    
    public function testAdd() {
        $math = new Math;
        $result = $math->setA($this->a)
            ->setB($this->b)
            ->add();

        $this->assertEquals(($this->a + $this->b), $result);
    }
    
    public function testSubtract() {
        $math = new Math;
        $result = $math->setA($this->a)
            ->setB($this->b)
            ->subtract();

        $this->assertEquals(($this->a - $this->b), $result);
    }
    
    public function testMutiply() {
        $math = new Math;
        $result = $math->setA($this->a)
            ->setB($this->b)
            ->multiply();

        $this->assertEquals(($this->a * $this->b), $result);
    }
    
    public function testDivide() {
        $math = new Math;
        $result = $math->setA($this->a)
            ->setB($this->b)
            ->divide();

        $this->assertEquals(($this->a / $this->b), $result);
    }

    public function testError() {
        $math = new Math;
        // no input
        try {
            $math->add();
        } catch(\Exception $e) { 
            $this->assertEquals('Please provide numbers to add', $e->getMessage());
        }
 
        // no input
        try {
            $math->subtract();
        } catch(\Exception $e) { 
            $this->assertEquals('Please provide numbers to subtract', $e->getMessage());
        }

        // no input
        try {
            $math->multiply();
        } catch(\Exception $e) { 
            $this->assertEquals('Please provide numbers to mutiply', $e->getMessage());
        }

        // no input
        try {
            $math->divide();
        } catch(\Exception $e) { 
            $this->assertEquals('Please provide numbers to divide', $e->getMessage());
        }

        //invalid input
        try {
            $math->setA('adf');
        } catch(\Exception $e) {
            $this->assertEquals('Invalid input', $e->getMessage());
        }
    }

}
