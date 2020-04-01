<?php 

require_once 'App/init.php';

use App\Produk\CetakInfo as CetakInfo;
use App\Produk\InfoMotor as InfoMotor;
use App\Produk\Motor as Motor;
use App\Produk\MotorBebek as MotorBebek;
use App\Produk\MotorMatik as MotorMatik;

$motor1 = new MotorBebek("yamaha","jupiter z","hitam",13000000,"90");                
$motor2 = new MotorMatik("honda","beat","merah",16000000,"80");
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
echo $cetak->cetak();

