<?php
class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }

    public function belokKiri(){

    }

    public function belokKanan(){

    }

    public function sayHello(){
        return "Hello Nasywa";
    }
    public function getLabel(){
        return "$this->nama, $this->merk";
    }
}
$mobil_nasywa = new Mobil();
$mobil_nasywa->nama = "Lamborghini Aventador";
$mobil_nasywa->merk = "Lamborghini";
$mobil_nasywa->warna = "Abu";
$mobil_nasywa->kecepatanMaksimal = "2000";

// echo "Mobil Nasywa :". $mobil_nasywa ->nama, $mobil_nasywa ->merk;
// var_dump($mobil_nasywa);

echo $mobil_nasywa->sayHello();
echo $mobil_nasywa->getLabel();

$mobil_zahra = new Mobil();
$mobil_nailah = new Mobil();

var_dump($mobil_nasywa);
?>