<?php
class Siswi {
    function biodata(){
        echo "Nasywa Zahra Nailah";
    }
    function ttl(){
        echo " Lahir di Cilegon/Banten, 29 agustus 2006 \n";
    }
}

//child class
//isi function disesuaikan dengan kebutuhan
class Mahasiswi extends Siswi{
    function ttl(){
        echo "Selamat anda LOLOS di ITS";
    }
}

$siswi = new Siswi;
$siswi->Biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();
?>