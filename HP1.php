<?php
class Handphone{

    public $nama = "Samsung Galaxy Z Flip4";
    public $merk = "Samsung";
    public $warna = "bora purple";
    public $memoriInternal = "256 GB";
    public $baterai = "3300 mAh";

    public function perbesarVolume(){

    }

    public function perkecilVolume(){

    }

    public function on(){

    }

    public function off(){

    }

    public function sayHello(){
        return "Hello Nasywa ";
    }
    public function getLabel(){
        return "$this->nama, $this->merk";
    }
}
$handphone_nasywa = new Handphone();
$handphone_nasywa->nama = "Samsung Galaxy Z Flip4";
$handphone_nasywa->merk = "Samsung";
$handphone_nasywa->warna = "bora purple";
$handphone_nasywa->memoriInternal = "256 GB";

echo "Handphone Nasywa :". $handphone_nasywa ->nama, $handphone_nasywa ->merk;
var_dump($handphone_nasywa);

echo $handphone_nasywa->sayHello();
echo $handphone_nasywa->getLabel();

$handphone_zahra = new Handphone();
$handphone_nailah = new Handphone();

var_dump($handphone_nasywa);
?>