<?php
class simpleTestTest extends PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * Setup
     * @return void 
     */
     public function setUp()
    {
        $this->setBrowser('phantomjs');
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowserUrl('http://127.0.0.1/');
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testAdd()
    {
        $this->url('/main.php');
        $a = 100;
        $b = 10;
        $this->byId('a')->value($a);
        $this->byId('b')->value($b);
        $this->byId('add')->click();
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testSubtract()
    {
        $this->url('/main.php');
        $a = 100;
        $b = 10;
        $this->byId('a')->value($a);
        $this->byId('b')->value($b);
        $this->byId('subtract')->click();
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testMultiply()
    {
        $this->url('/main.php');
        $a = 100;
        $b = 10;
        $this->byId('a')->value($a);
        $this->byId('b')->value($b);
        $this->byId('multiply')->click();
    }
    
    /** 
     * Method testSelenium 
     * @test 
     */ 
    public function testDivide()
    {
        $this->url('/main.php');
        $a = 100;
        $b = 10;
        $this->byId('a')->value($a);
        $this->byId('b')->value($b);
        $this->byId('divide')->click();
    }

    public function testTitle() 
    {
        $this->url('/main.php');
        $this->assertEquals('Test 123', $this->byId('title')->text());
    }
}
?>
