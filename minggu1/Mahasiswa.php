<?php

class Mahasiswa {

  // property
  public $nama;
  public $jurusan;
  public $nim;
  public $ipk;
  public $lulusan;
  
  // function
  public function seleksiBeasiswa()
  {
    if ($this->ipk >= 3) return "IPK anda: $this->ipk<br> Selamat $this->nama, anda menerima beasiswa.";
    else return "IPK anda: $this->ipk<br> Maaf $this->nama, anda tidak dapat menerima beasiswa karena IPK anda kurang dari 3.";
  }

  public function pameranApp($namaApp)
  {
    $dataPeserta = "Nama: $this->nama<br>Jurusan: $this->jurusan<br>Nama aplikasi: $namaApp";
    if ($this->jurusan === 'TI') {
      return "$dataPeserta<br>Anda bisa mengikuti pameran gratis.";
    } else {
      return "$dataPeserta<br>Anda bisa mengikuti pameran dengan membayar Rp100.000.";
    }
  }

  public function perkenalanDiri()
  {
    return "Halo, nama saya $this->nama. Saya dari jurusan $this->jurusan, lulusan $this->lulusan. IPK terakhir saya $this->ipk.";
  }

}

$mhs = new Mahasiswa();
$mhs->nama = "Agus";
$mhs->jurusan = "TI";
$mhs->nim = "E31190xxx";
$mhs->ipk = 2;
$mhs->lulusan = "SMK";

echo $mhs->seleksiBeasiswa();
echo $mhs->pameranApp("Restoranku");
echo $mhs->perkenalanDiri();