<?php

class Handphone{

    public $namamerek;
    public function hello(){
        return "dari kelas handphone";
    }
}
$handphone = new handphone();
echo $handphone->namamerek = "Iphone ";
echo $handphone->hello();
?>