<?php

class Mobil{

    private $namamerek;
    private function hello(){
        return "dari kelas mobil";
    }
    public function setnamamerk($namamerek){
    $this->namamerek = $namamerek;
}

public function getprivate()
{
    return $this->namamerek . "". $this->hello();
}
}
$mobil = new mobil();
$mobil->setnamamerk("Mercedes-Benz");
echo $mobil->getprivate();
?>