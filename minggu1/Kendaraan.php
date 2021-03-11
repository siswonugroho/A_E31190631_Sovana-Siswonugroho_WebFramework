<?php

class Kendaraan {

  public $jenis;
  public $jml_roda;
  public $merk;
  public $bahan_bakar;
  public $harga;
  public $tahun;

  public function subsidiBbm()
  {
    if ($this->bahan_bakar === 'Premium' && $this->tahun < 2005) {
      return 'Ya';
    } else {
      return 'Tidak';
    }
  }
  
  public function hargaSecond()
  {
    $hargaLama = $this->harga;
    $diskon = 0;

    if ($this->tahun > 2010) {
      $diskon = 20;
    } else if ($this->tahun >= 2005 && $this->tahun <= 2010) {
      $diskon = 30;
    } else if ($this->tahun < 2005) {
      $diskon = 40;
    }

    $hargaBaru = $hargaLama - ($diskon / 100 * $hargaLama);
    return $hargaBaru;

  }
}

$hondaBeat = new Kendaraan();
$hondaBeat->merk = 'Honda';
$hondaBeat->jenis = 'Beat';
$hondaBeat->jml_roda = 2;
$hondaBeat->bahan_bakar = 'Premium';
$hondaBeat->harga = 15000000;
$hondaBeat->tahun = 2008;

echo $hondaBeat->subsidiBbm() . '<br>' . $hondaBeat->hargaSecond();