<?php
//Materi konstanta

//Define()
// define('NAMA', 'Nasywa');
// echo NAMA;

//CONTOH KONSTANTA
class Laptop{
    const DOLLAR = 14000;

    public function beliLaptop($harga){
        return "Beli Laptop Baru RP." . $harga*self::DOLLAR;
    }
}

//akses konstanta lewat object

$laptop_baru = new Laptop();
echo $laptop_baru->beliLaptop(5000000);

//class
echo Laptop::DOLLAR;

echo __LINE__;
function coba(){
    return __FUNCTION__;
}

echo coba();

?>