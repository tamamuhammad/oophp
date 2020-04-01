<?php
// parent class
class Motor {                                                                             
    // properti
    protected $produsen, $merk, $warna, $diskon;
    private $harga;                
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $diskon = 0){          
        $this->produsen = $produsen;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }
    // method
    public function getInfo(){                                                             
        return "{$this->produsen}, {$this->merk}, {$this->warna}";
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }
}
// child class
class MotorBebek extends Motor {  
    // properti
    public $kapasitasBebek;
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $kapasitasBebek, $diskon = 0){
        parent::__construct($produsen, $merk, $warna, $harga, $diskon);
        $this->kapasitasBebek = $kapasitasBebek;
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

    public function getKapasitas(){
        return $this->kapasitasBebek;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getInfo(){                                                             
        return "Motor Bebek : " . parent::getInfo() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} kg";
    }
}
// child class
class MotorMatik extends Motor {   
    // properti
    public $kapasitasMatik;
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $kapasitasMatik, $diskon = 0){
        parent::__construct($produsen, $merk, $warna, $harga, $diskon);
        $this->kapasitasMatik = $kapasitasMatik;
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

    public function getKapasitas(){
        return $this->kapasitasMatik;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getInfo(){                                                             
        return "Motor Matik : " . parent::getInfo() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} liter" ;
    }
}
//object
$motor1 = new MotorBebek("yamaha","jupiter z","hitam",13000000,"90");                      
$motor2 = new MotorMatik("honda","beat","merah",16000000,"80");

echo "{$motor1->getInfo()} <br> {$motor2->getInfo()}";
echo "<br><br>";
$motor2->setDiskon(50);
echo "Harga Motor matik setelah didiskon : Rp. {$motor2->getHarga()}";