<?php 

class Produk {                                      // class
    public $nama, $genre;                           // property
    public function getProduk(){                    // method atau function
        return "$this->nama, $this->genre";
    }
}

$produk1 = new Produk;                              // object
$produk1->nama = "spider solaiter";
$produk1->genre = "sport";

$produk2 = new Produk;                              // object
$produk2->nama = "home alone";
$produk2->genre = "horror";

echo "game : " . $produk1->getProduk() . "<br>";
echo "film : " . $produk2->getProduk();