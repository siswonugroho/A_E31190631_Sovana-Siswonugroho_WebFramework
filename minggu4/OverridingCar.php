<?php

class Car {
  public function hello()
  {
    return "beep";
  }
}

class SportsCar extends Car {
  public function hello()
  {
    return "Hello";
  }
  public function calcNumMilesOnFullTank()
  {}
}

$sportsCar1 = new SportsCar();
echo $sportsCar1->hello();