<?php

// interface Shape
interface Shape {
  public function calcArea();
}

// class Circle
class Circle implements Shape {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  public function calcArea()
  {
    return $this->radius * $this->radius * pi();
  }
}

// class Rectangle
class Rectangle implements Shape {
  private $width;
  private $height;

  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function calcArea()
  {
    return $this->width * $this->height;
  }
}

$circ = new Circle(24);
$rect = new Rectangle(21,2);

echo $circ->calcArea();
echo "<br>";
echo $rect->calcArea();