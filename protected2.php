<?php
class Handphone2{
    protected $namamerek = "Samsung";
    protected function helloYou(){
        return "dari kelas handphone";
    }
}

class mobil extends Handphone2{
    public function gethandphone(){
        return $this->helloYou()."".$this->namamerek;
    }
}

$handphone2 = new Handphone();
echo $handphone2->gethandphone();
?>