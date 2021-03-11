<?php

class Laptop {

  public $pemilik;
  public $merk;

  public function hidupkan_laptop()
  {
    return "Hidupkan laptop $this->merk punya $this->pemilik<br>";
  }
  public function matikan_laptop()
  {
    return "Matikan laptop $this->merk punya $this->pemilik<br>";
  }
  public function restart_laptop()
  {
    return "Matikan laptop $this->merk punya $this->pemilik. Hidupkan laptop $this->merk punya $this->pemilik<br>";
  }

}

$laptopA = new Laptop();
$laptopB = new Laptop();
$laptopC = new Laptop();

$laptopA->merk = "ASUS";
$laptopA->pemilik = "A";

$laptopB->merk = "Acer";
$laptopB->pemilik = "B";

$laptopC->merk = "Lenovo";
$laptopC->pemilik = "C";

echo $laptopA->hidupkan_laptop();
echo $laptopB->matikan_laptop();
echo $laptopC->restart_laptop();
