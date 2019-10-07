<?php

class QuadraticEquation
{
    public $numberA;
    public $numberB;
    public $numberC;

    public function __construct($numberA, $numberB, $numberC)
    {
        $this->numberA = $numberA;
        $this->numberB = $numberB;
        $this->numberC = $numberC;
    }

    public function getNumberA()
    {
        return $this->numberA;
    }

    public function getNumberB()
    {
        return $this->numberB;
    }

    public function getNumberC()
    {
        return $this->numberC;
    }

    public function getDiscriminant()
    {
        return ($this->numberB * $this->numberB) - (4 * ($this->numberA * $this->numberC));
    }

    public function getRoot1()
    {
        return -($this->numberB + sqrt($this->numberB * $this->numberB - 4 * $this->numberA * $this->numberC)) / (2 * $this->numberA);
    }

    public function getRoot2()
    {
        return -($this->numberB - sqrt($this->numberB * $this->numberB - 4 * $this->numberA * $this->numberC)) / (2 * $this->numberA);
    }

    public function display()
    {
        if ($this->getDiscriminant() >= 0) {
            return "nghiem 1 la " . $this->getRoot1() . " va nghiem 2 la " . $this->getRoot2();

        } else {
            return " Phuong trinh khong co nghiem";
        }
    }
}