<?php
/**
 * This file is part of the Travis Test Project
 * (c) 2014-2016 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */
namespace Math;
  
/**
 * The Math class
 *
 * @package  Test
 * @category Test
 * @author   Clark Galgo <cgalgo@openovate.com>
 * @standard PSR-2
 */

class Index
{
    /*
     * @var null|int $a
     */
    protected $a = null;

    /*
     * @var null|int $a
     */
    protected $b = null;
    
    /*
     * Set the value for $this->a
     *
     * @param int $a
     * @return Math\Index
     */
    public function setA($a)
    {
        if (!is_numeric($a)) {
            throw new \Exception('Invalid input');
        }

        $this->a = $a;
        return $this;
    }

    /*
     * Set the value for $this->b
     *
     * @param int $b
     * @return Math\Index
     */
    public function setB($b)
    {
        if (!is_numeric($b)) {
            throw new \Exception('Invalid input');
        }

        $this->b = $b;
        return $this;
    }

    /*
     * Add the two value
     *
     * @return int
     */
    public function add()
    {
        if ($this->a === null || $this->b === null) {
            throw new \Exception('Please provide numbers to add');
        }

        return $this->a + $this->b;
    }

    /*
     * Subtract the two value
     *
     * @return int
     */
    public function subtract()
    {
        if ($this->a === null || $this->b === null) {
            throw new \Exception('Please provide numbers to subtract');
        }

        return $this->a - $this->b;
    }

    /*
     * Multiply the two value
     *
     * @return int
     */
    public function multiply()
    {
        if ($this->a === null || $this->b === null) {
            throw new \Exception('Please provide numbers to multiply');
        }

        return $this->a * $this->b;
    }

    /*
     * Divide the two value
     *
     * @return int
     */
    public function divide()
    {
        if ($this->a === null || $this->b === null) {
            throw new \Exception('Please provide numbers to divide');
        }

        return $this->a / $this->b;
    }
}
