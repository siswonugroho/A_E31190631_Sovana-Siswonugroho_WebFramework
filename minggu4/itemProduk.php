<?php

class itemProduk {
  protected $ukuran;
  protected $warna;
  protected $nama;
}

class Topi extends itemProduk {
  private $model = 'Unknown';
  
  public function getTopi()
  {
    $this->nama = 'Eiger';
    $this->ukuran = 'XL';
    $this->warna = 'Hitam';
    return "Nama topi: $this->nama<br>
    Ukuran: $this->ukuran<br>
    Model: $this->model<br>
    Warna: $this->warna<br>";
  }
}

class Celana extends itemProduk {
  private $model = 'Jeans';
  private $tipe = 'Unknown';

  public function getCelana()
  {
    $this->nama = 'Levis';
    $this->ukuran = 'XL';
    $this->warna = 'Biru';
    return "Nama celana: $this->nama<br>
    Ukuran: $this->ukuran<br>
    Model: $this->model<br>
    Warna: $this->warna<br>";
  }
}

class Baju extends itemProduk {
  private $tipe = 'Polo';

  public function getBaju()
  {
    $this->nama = 'Adidas';
    $this->ukuran = 'XL';
    $this->warna = 'Biru';
    return "Nama baju: $this->nama<br>
    Ukuran: $this->ukuran<br>
    Tipe: $this->tipe<br>
    Warna: $this->warna<br>";
  }
}

$topi = new Topi();
echo $topi->getTopi();
echo '----------------<br>';
$celana = new Celana();
echo $celana->getCelana();
echo '----------------<br>';
$baju = new Baju();
echo $baju->getBaju();