<?php

class Bar
{

    public function __construct()
    {
        $this->getA();
    }

    private function getA()
    {
        return $this->getB();
    }

    private function getB()
    {
        return $this->getC();
    }

    private function getC()
    {
        return true;
    }
}