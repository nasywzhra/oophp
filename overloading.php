<?php
class shape{
    function __call($nama_function, $arguments){
        //mencocokan nama fungsinya

        if($nama_function == 'area'){
            switch (count($arguments)){
                //untuk membuat circle
                case 1 :
                    return 3.14 * $arguments[0];
                    //untuk membuat persegi
                    case 2 : 
                        return $arguments[0] * $arguments[1];
            }
        }
    }
}
//inisiasi object kelas shape
$shape = new Shape;
//memanggil lingkarang 
echo($shape->area(2));
echo "\n";

//memanggil persegi 
echo ($shape->area(4,2));
?>