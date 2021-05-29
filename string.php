<?php 
$s = "Hello World vvp";
$s1 = substr($s, 0, 5);
$h = "<br><b>Hello/</b></br>";
$s3 = strip_tags($h, "<b>");
$s4 = strtolower($s);
$s5 = strtoupper($s);
$s6 = ucwords($s);
$s7 = explode($s," ");
echo "<br>" .$s1;
echo "<br>" .$s3;
echo "<br>" .$s4;
echo "<br>" .$s5;
echo "<br>" .$s6;
echo "<br>" .$s7;
?>