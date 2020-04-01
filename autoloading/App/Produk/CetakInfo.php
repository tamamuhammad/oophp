<?php 
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