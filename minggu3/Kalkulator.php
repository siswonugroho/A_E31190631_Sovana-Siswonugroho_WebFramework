<?php

class Kalkulator {

  private $num1;
  private $num2;
  private $num3;
  
  public function tambah($num1, $num2, $num3)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
    return $this->num1 + $this->num2 + $this->num3;
  }
  public function kurang($num1, $num2, $num3)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
    return $this->num1 - $this->num2 - $this->num3;
  }
  public function kali($num1, $num2, $num3)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
    return $this->num1 * $this->num2 * $this->num3;
  }
  public function bagi($num1, $num2, $num3)
  {
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
    return $this->num1 / $this->num2 / $this->num3;
  }
}

$kalkulator = new Kalkulator();

echo $kalkulator->bagi(13, 47, 73);
