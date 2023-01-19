<?php
// class Komputer{

//     public $processor = "Core i5";

//     public function memutar_video(){
//         return "Computer memutar video". self::$processor;
//     }
// }

// // echo Komputer::$processor;
// echo Komputer::memutar_video();

// $komputer_khesya = new Komputer();
// echo $komputer_khesya->processor;
// echo $komputer_khesya->memutar_video();


class Nilai{
    public static $angka = 1;

    public static function halo(){
        return "Halo" . self::$angka++ . "Kali <br>";
    }
}

$obj = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
?>