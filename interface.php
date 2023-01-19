<?php

interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    public function setUkuran($ukuran);
}

class Apel implements Buah {
    protected $warna;
    protected $ukuran;

    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
    public function setWarna($warna){
        $this->warna = $warna;

    }
    //variabel function/method
    public function setUkuran($ukuran){
        $this->ukuran = $ukuran;
    }
}