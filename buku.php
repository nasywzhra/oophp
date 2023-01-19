<?php
class Buku{

    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }

    public function __destruct(){
        echo "Destruct dijalankan";
    }

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}
}
$buku1 = new Buku("Atomic Habit", "James Clear", "Penguin Rnadom House", 100000);
// $buku1 = new Buku();
// $buku1->judul = "Atomic Habit";
// $buku1->penulis = "James Clear";
// $buku1->penerbit = "Penguin Random House";
// $buku1->harga = "100000";

$buku2 = new Buku("Insecurity", "Alvi Syahrin", "Alvi Ardhi Publishing", 99000);
// $buku2 = new Buku();
// $buku2->judul = "Insecurity";
// $buku2->penulis = "Alvi Syahrin";
// $buku2->penerbit = "Alvi Ardhi Publishing";
// $buku2->harga = "99000";

echo "Buku : " . $buku1->getLabel();
echo "<br>";
echo "Buku : " . $buku2->getLabel();
?>