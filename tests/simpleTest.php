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
    public function testSelenium()
    {
        $this->url("/main.php");
        $this->assertEquals('Hello', $this->byId('boom')->text());
    }
}
?>
