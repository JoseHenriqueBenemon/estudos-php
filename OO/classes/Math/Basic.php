<?php

namespace Math;

class Basic
{
    public function sum(Float $a, Float $b)
    {
        return $a + $b;
    }

    public function subtract(Float $a, Float $b)
    {   
        return $a - $b;
    }

    public function multiply(Float $a, Float $b)
    {
        return $a * $b;
    }

    public function divide(Float $a, Float $b)
    {
        return $a / $b;
    }
}