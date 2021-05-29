<?php 

function displayName($name){
    echo "Hello " .$name ."!";
}

function Square($n){
    echo $n * $n;
}

function factorial($n){
    $f = 1;
   while($i=$n; $i<0; $i--){
       echo "Hello";     
       $f = $f * $i;
   }
   return $f;
}

displayName("Sai");
$s = Square(2);
echo "<br>" .$s;
$fact = factorial(5);
echo "<br>" .$fact;
?>