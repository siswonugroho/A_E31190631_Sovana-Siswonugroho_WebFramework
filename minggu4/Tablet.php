<?php

class Tablet {
  public $merk;
  public $tahun;
  public $tipe;
  public $memori;

  // protected berarti method/property tsb hanya bisa diakses oleh class turunannya dan tidak bisa diakses dari luar class.
  protected function getMerk()
  {
    return $this->merk;
  }

}

class Handphone extends Tablet {

  // private berarti method atau property tsb hanya bisa diakses dari dalam class itu sendiri.
  private function getMerkDanTipe() {
    return "$this->merk $this->tipe";
  }
  public function beliHandphone()
  {
    return "Beli handphone " . $this->getMerkDanTipe();
  }
  public function cekMemori()
  {
    return "$this->tipe punya memori sebesar $this->memori GB";
  }
  public function tampilkanSemuaSpek()
  {
    return "Merk: $this->merk<br>
    Tipe: $this->tipe<br>
    Tahun rilis: $this->tahun<br>
    Memori: $this->memori GB<br>";
  }
}

$hp = new Handphone();
$hp->merk = "Apple";
$hp->tipe = "iPhone 8 Plus";
$hp->tahun = 2017;
$hp->memori = 4;

echo $hp->tampilkanSemuaSpek();