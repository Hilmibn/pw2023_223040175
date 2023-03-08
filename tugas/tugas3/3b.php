<?php 
 
 
 function urutanAngka($angka){
    $j = 1;
    for($i = 1; $i <= $angka; $i++){
        for($u = 1; $u <= $i; $u++){
            echo $j . " ";
            $j++;
        }
        echo "<br>";
    }
 }

 urutanAngka(5);

?>