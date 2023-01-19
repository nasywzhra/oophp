<?php
include ('negara/indonesia.php');

class Indonesia{
    public $test;
    public function __construct(){
        $this->test=new \OOPHP\negara\Indonesia();
        echo "Ibukota: ". $this->test->ibukota("Jakarta");
        echo "\n";
        echo "Bahasa: ". $this->test->bahasa("Indonesia");
    }
}

$jalan = new Indonesia();
?>