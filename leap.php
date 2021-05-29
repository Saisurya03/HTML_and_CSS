<!DOCTYPE html>
<html>
<body>
<form action="">
    <input type="text" name="year" id="year">
    <input type="submit" value="enter">
</form>
<?php  
$year = $_GET["year"];  

if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?>
</body>
</html> 