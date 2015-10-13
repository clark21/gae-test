<?php
require_once(__DIR__.'/../math.php');

class EdenCoreRouteTest extends \PHPUnit_Framework_TestCase 
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

}
