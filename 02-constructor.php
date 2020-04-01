<?php 

class Produk {                                                                  // class
    public $merek, $tipe, $warna, $harga;                                       // property

    public function __construct($merek, $tipe, $warna, $harga){
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function getProduk(){                                                // method
        return "$this->merek, $this->tipe, $this->warna, $this->harga";
    }
}

$produk1 = new Produk("avanza","minibus","hitam","135000000");                  // object
$produk2 = new Produk("agya","minibus","merah","110000000");                    // object

echo "mobil 1 : " . $produk1->getProduk() . "<br>";
echo "mobil 2 : " . $produk2->getProduk();