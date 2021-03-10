<?php

class Buku {

  private $judul_buku = 'Laskar pelangi';
  private $pengarang = 'Andrea Hirata';
  private $tahun_terbit = '2005';

  public function tampilkanInfoBuku() {
    echo "Judul buku: $this->judul_buku<br>Pengarang: $this->pengarang<br>Tahun terbit: $this->tahun_terbit";
  }
  
}

$buku = new Buku();
$buku->tampilkanInfoBuku();