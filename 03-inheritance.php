<?php
// parent class
class Motor {                                                                              
    // properti
    public $produsen, $merk, $warna, $kapasitasBebek, $kapasitasMatik;                
    // construct
    public function __construct($produsen, $merk, $warna, $kapasitasBebek, $kapasitasMatik){          
        $this->produsen = $produsen;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kapasitasBebek = $kapasitasBebek;
        $this->kapasitasMatik = $kapasitasMatik;
    }
    // method
    public function getInfo(){                                                             
        return "{$this->produsen} | {$this->merk} | {$this->warna}";
    }
}
// child class
class MotorBebek extends Motor {  
    // method                                                          
    public function getInfo(){                                                             
        return "Motor Bebek : ".parent::getInfo()." | {$this->kapasitasBebek} liter.";
    }
}
// child class
class MotorMatik extends Motor {   
    // method                                                         
    public function getInfo(){                                                             
        return "Motor Matik : ".parent::getInfo()." | {$this->kapasitasMatik} kg.";
    }
}
//object
$motor1 = new MotorBebek("yamaha","jupiter","merah-biru",100,0);                      
$motor2 = new MotorMatik("honda","new beat","hitam-merah",0,90);
$motor3 = new MotorMatik("yamaha","mio","pink-ungu",0,100);

echo "{$motor1->getInfo()} <br> {$motor2->getInfo()} <br> {$motor3->getInfo()}";