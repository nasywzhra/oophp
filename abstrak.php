<?php
//keyword penggunaan abstrak kelas menggunakan (abstrak)
abstract class  Mobil{
    public $setHarga;

    //dibawah ini abstrak kelas
    abstract function spec();

    //dibawah ini bukan abstrak kelas
    public function setHarga($setHarga){
        $this->setHarga($setHarga);
    }
}
class Pajero extends Mobil{
    function spec(){
        $nama = "Nama Mobil : Pajero";
        $kapasitas = "Kapasitas 7 Orang";
        
        //membuat output
        echo $nama;
        echo "\n";
        echo $kapasitas;
    }
}

//bisa menginisiasi si objek yaitu pada kelas turunannya

$pajero = new Pajero();
$pajero->spec();
?>