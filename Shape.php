<?php

abstract class Shape{
    
    protected $color;

    public function __construct($color="Black")
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public abstract function getArea();

}

class Square extends Shape
{
    private $side=40;

    public function getArea()
    {
      return pow($this->side,2);  
    }
}

class Triangle extends Shape
{
    private $base=10;
    private $height=12;

    public function getArea()
    {
        return .5*$this->base*$this->height;
    }
}

class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return $this->radius/2;
    }
}




