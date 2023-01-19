<?php

class Mobil{

    public $namamerek;
    public function hello(){
        return "dari kelas mobil";
    }
}
$mobil = new mobil();
echo $mobil->namamerek = "Tesla ";
echo $mobil->hello();
?>