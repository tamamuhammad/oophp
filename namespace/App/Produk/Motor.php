<?php namespace App\Produk;
abstract class Motor {                                                               
    // properti
    protected $produsen, $merk, $warna, $diskon, $harga;                
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $diskon = 0){     
        $this->produsen = $produsen;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }
    // method
    public function getProdusen(){
        return $this->produsen;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function getWarna(){
        return $this->warna;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    abstract public function getInformasi();

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }
}