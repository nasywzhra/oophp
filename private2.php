<?php

class Handphone{

    private $namamerek;
    private function hello(){
        return "dari kelas handphone";
    }
    public function setnamamerk($namamerek){
    $this->namamerek = $namamerek;
}

public function getprivate()
{
    return $this->namamerek . "". $this->hello();
}
}
$handphone = new handphone();
$handphone->setnamamerk("Samsung");
echo $handphone->getprivate();
?>