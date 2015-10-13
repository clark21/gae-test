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
}


