
<?php

class Car {
  private $model;
  public function getModel() {
    return "The car model is $this->model";
  }
}

$mercedes = new Car();
$mercedes->model = "Mercedes benz";
echo $mercedes->getModel();