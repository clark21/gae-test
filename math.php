<?php
Class Math {
    protected $a = null;
    protected $b = null;
    public function setA($a) {
        if(!is_numeric($a)) {
            throw new Exception('Invalid input');
        }

        $this->a = $a;
        return $this;
    }

    public function setB($b) {
        if(!is_numeric($b)) {
            throw new Exception('Invalid input');
        }

        $this->b = $b;
        return $this;
    }

    public function add() {
        if($this->a === null || $this->b === null) {
            throw new Exception('Please provide numbers to add');
        }

        return $this->a + $this->b;
    }
    
    public function subtract() {
        if($this->a === null || $this->b === null) {
            throw new Exception('Please provide numbers to subtract');
        }

        return $this->a - $this->b;
    }

    public function multiply() {
        if($this->a === null || $this->b === null) {
            throw new Exception('Please provide numbers to multiply');
        }

        return $this->a * $this->b;
    }

    public function divide() {
        if($this->a === null || $this->b === null) {
            throw new Exception('Please provide numbers to divide');
        }

        return $this->a / $this->b;
    }

    if(isset($_POST['a']) && $_POST['b'] && isset($_POST['process'])) {
        $math = new Math;
        $result = 0;
        switch(strtolower($_POST['process'])) {
            case 'add':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->add();
                break;
            case 'subtract':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->subtract();
                break;
            case 'multiply':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->multiply();
                break;
            case 'divide':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->divide();
                break;

        }
    }
}


