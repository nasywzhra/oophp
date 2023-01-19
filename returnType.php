<?php
//1. Menggunakan Scalar type
// declare(strict_types=1);
// function setNumber(int $num){
//     echo $num;
// }

// setNumber("10");

//2. return type
// function getNumber() : Int{
//     return 4;
// }
// echo getNumber();

//3. menggunakan array
function getNumber() : array{
    return [1,2,3];
}
print_r (getNumber());
?>