<?php 
class MotorBebek extends Motor implements InfoMotor {  
    // properti
    public $kapasitasBebek;
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $kapasitasBebek, $diskon = 0){
        parent::__construct($produsen, $merk, $warna, $harga, $diskon);
        $this->kapasitasBebek = $kapasitasBebek;
    }
    // method    
    public function getKapasitas(){
        return $this->kapasitasBebek;
    }

    public function getInformasi(){                                                 
        return "{$this->produsen}, {$this->merk}, {$this->warna}";
    }

    public function getInfo(){                                                       
        return "Motor Bebek : " . $this->getInformasi() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} kg";
    }
}