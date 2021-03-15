<?php

class Car {
  private $model;
  public function setModel($model)
  {
    $this->model = $model;
  }
  public function hello()
  {
    return "Beep I am a <i>$this->model</i>";
  }
}

class SportsCar extends Car {

}

$sportsCar = new SportsCar();
$sportsCar->setModel('Mercedes Benz');
echo $sportsCar->hello();