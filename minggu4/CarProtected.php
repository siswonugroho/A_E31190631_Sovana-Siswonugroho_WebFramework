<?php

class Car {
  protected $model;
  public function setModel($model)
  {
    $this->model = $model;
  }
}

class SportsCar extends Car {
  public function hello()
  {
    return "Beep I am a <i>$this->model</i>";
  }
}

$sportsCar = new SportsCar();
$sportsCar->setModel('Mercedes Benz');
echo $sportsCar->hello();