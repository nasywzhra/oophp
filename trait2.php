<?php   
 trait daftarRumus {   
   public function luas_persegi(){
    echo "input sisi persegi: ";
    $s = fgets(STDIN);
   return "ini luas persegi: ". $s * $s;  
   }  
 }   

 class Rumus {  
      use daftarRumus;  
 }  

 $rumus = new Rumus();  
 echo $rumus->luas_persegi();  
 ?>  