<?php
class Mobil2{
    protected $namamerek = "BMW";
    protected function hellomobil(){
        return "dari kelas mobil";
    }
}

class mobil extends Mobil2{
    public function getmobil(){
        return $this->hellomobil()."".$this->namamerek;
    }
}

$mobil2 = new Mobil();
echo $mobil2->getmobil();
?>