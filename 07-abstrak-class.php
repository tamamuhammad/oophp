<?php 
// abstrak/parent class
abstract class Motor {                                                               
    // properti
    private $produsen, $merk, $warna, $diskon, $harga;                
    // construct
    public function __construct($produsen, $merk, $warna, $harga, $diskon = 0){      
        $this->produsen = $produsen;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }
    // method abstrak
    abstract public function getInfo();
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

    public function getInformasi(){                                                 
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
    public function getKapasitas(){
        return $this->kapasitasBebek;
    }

    public function getInfo(){                                                       
        return "Motor Bebek : " . $this->getInformasi() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} kg";
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
    public function getKapasitas(){
        return $this->kapasitasMatik;
    }

    public function getInfo(){                                                       
        return "Motor Matik : " . $this->getInformasi() . " | Rp. " . parent::getHarga() . " | {$this->getKapasitas()} liter" ;
    }

}
// class cetak
class CetakInfo{
    public $daftarMotor = [];

    public function tambahMotor( Motor $motor ){
        $this->daftarMotor[] = $motor;
    }

    public function cetak(){
        $str = "";
        foreach ( $this->daftarMotor as $m ){
            $str .= "- {$m->getInfo()} <br>";
        }
        return $str;
    }
}
//object
$motor1 = new MotorBebek("yamaha","jupiter z","hitam",13000000,"90");                
$motor2 = new MotorMatik("honda","beat","merah",16000000,"80");
$motor3 = new MotorBebek("honda","astrea","hitam",1000000,"100");
$cetak = new CetakInfo;

echo "Motor 1 : <br>";
echo "Merk Motor : - {$motor1->getMerk()} <br>";
echo "Warna Motor : - {$motor1->getWarna()} <br><br>";
echo "Motor 2 : <br>";
echo "Merk Motor : - {$motor2->getMerk()} <br>";
echo "Warna Motor : - {$motor2->getWarna()} <hr>";
echo "Info Motor : <br>";
$cetak->tambahMotor( $motor1 );
$cetak->tambahMotor( $motor2 );
$cetak->tambahMotor( $motor3 );
echo $cetak->cetak();

$motor1->setDiskon(50);
echo $motor1->getHarga();
