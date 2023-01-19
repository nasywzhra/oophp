<?php

class Binatang {
    public $nama;
    public $beruang;

    public function __construct($nama, $beruang){
        $this->nama = $nama;
        $this->beruang = $beruang;
    }

    public function jenisberuang(){
        echo "Contoh nama beruang yaitu {$this->nama} dan warnanya {$this->beruang}";
    }
}

//membuat kelas pewarisan
//keyword inheritance/pewarisan adalah extends

class Kucing extends Binatang{
    public function pesan(){
        echo "Macam-macam beruang ";
    }
}

//inisiasi object
$binatang = new Kucing("Madu, Panda, Ice Bear", "coklat dan putih");
$binatang->pesan();
$binatang->jenisberuang();
?>