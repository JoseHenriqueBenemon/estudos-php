<?php

namespace Math;

class PlaneGeometry
{   
    const NUMBER_PI = 3.14;

    public function triangle(Float $b, Float $h)
    {
        return ($b * $h) / 2;
    }

    public function circle(Float $r)
    {
        return planeGeometry::NUMBER_PI * ($r * $r);
    }

    public function trapeze(Float $biggerBase, Float $smallerBase, Float $h)
    {
        return (($biggerBase + $smallerBase) * $h) / 2;
    }
}