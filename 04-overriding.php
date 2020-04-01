<?php
// parent class
class Motor {                                                                             
    // properti
    public $produsen, $merk, $warna;                
    // construct
    public function __construct($produsen, $merk, $warna){          
        $this->produsen = $produsen;
        $this->merk = $merk;
        $this->warna = $warna;
    }
    // method
    public function getInfo(){                                                             
        return "{$this->produsen} | {$this->merk} | {$this->warna}";
    }
}
// child class
class MotorBebek extends Motor {  
    // properti
    public $kapasitasBebek;
    // construct
    public function __construct($produsen, $merk, $warna, $kapasitasBebek){
        parent::__construct($produsen, $merk, $warna);
        $this->kapasitasBebek = $kapasitasBebek;
    }
    // method                                                          
    public function getInfo(){                                                             
        return "Motor Bebek : {$this->produsen} | {$this->merk} | {$this->warna} | {$this->kapasitasBebek}";
    }
}
// child class
class MotorMatik extends Motor {   
    // properti
    public $kapasitasMatik;
    // construct
    public function __construct($produsen, $merk, $warna, $kapasitasMatik){
        parent::__construct($produsen, $merk, $warna);
        $this->kapasitasMatik = $kapasitasMatik;
    }
    // method                                                         
    public function getInfo(){                                                             
        return "Motor Matik : " . parent::getInfo() . " | {$this->kapasitasMatik}";
    }
}
//object
$motor1 = new MotorBebek("yamaha","jupiter","merah-biru","100 liter");                      
$motor2 = new MotorMatik("honda","new beat","hitam-merah","90 kg");
$motor3 = new MotorMatik("yamaha","mio","pink-ungu","100 kg");

echo "{$motor1->getInfo()} <br> {$motor2->getInfo()} <br> {$motor3->getInfo()}";