<?php
    $a = array("Maruti" , "Tata" , "Ford");
    Shuffle($a);
    $b = array_slice($a, 1,2);
    
    $b = count($a);
    for($d=0; $d<count($a); $d++){
        echo  $a[$d];
        echo "<br>";
    }
?>
