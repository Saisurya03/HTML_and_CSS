<!DOCTYPE html>
<html>
<body>
<form action="">
    <input type="text" name="num" id="num">
    <input type="submit" name="sub" id="sub " value="enter">
</form>
<?php  
if(isset($_GET["sub"])){
    $n = $_GET["num"];  

    if(n%2 == 0)
    {
    echo "$n is even.";    
    }
     
    else  
    {  
    echo "$n is odd.";    
    }
    
}
?>
</body>
</html> 