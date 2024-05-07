<?php

abstract class Shape {
    protected $name;

    // Abstract method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete method
    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $height;
    private $width;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle1', 5);
var_dump($circle);
$rectangle = new Rectangle('Rect1', 10, 5);
var_dump($rectangle);

echo $circle->getName() . 'Area: ' . $circle->calculateArea() . '<br>';