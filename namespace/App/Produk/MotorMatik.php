<?php namespace App\Produk;
class MotorMatik extends Motor implements InfoMotor {   
    // properti
    public $kapasitasMatik;
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $kapasitasMatik, $diskon = 0){
        parent::__construct($produsen, $merk, $warna, $harga, $diskon);
        $this->kapasitasMatik = $kapasitasMatik;
    }
    // method    
    public function getKapasitas(){
        return $this->kapasitasMatik;
    }

    public function getInformasi(){                                                  
        return "{$this->produsen}, {$this->merk}, {$this->warna}";
    }

    public function getInfo(){                                                       
        return "Motor Matik : " . $this->getInformasi() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} liter" ;
    }
}