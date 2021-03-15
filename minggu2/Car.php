<?php

class Car {

  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;

  public function hello()
  {
    return "Beep I am a <i>$this->comp</i>, and I am <i>$this->color</i>";
  }
}

$bmw = new Car();
$mercedes = new Car();

// Set values
$bmw->color = 'blue';
$bmw->comp = 'BMW';
$mercedes->comp = 'Mercedes Benz';

echo $bmw->hello();