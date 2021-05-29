<form action="" method="post">
    Name: <input type="text" name="sname"> &nbsp
    <input type="submit" name="submitBtn" id="submitBtn">
</form>

<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "wp";

$connection_obj= mysqli_connect($servername, $username, $pass);

if (!$connection_obj) {
    echo "Error No: " . mysqli_connect_errno();
    echo "Error Description: " . mysqli_connect_error();
    exit;
}
else{
    mysqli_select_db($connection_obj, "wp");
    
    $i = "l";   
    if(isset($_POST['submitBtn'])){
        echo "hello Worlds";
    }
}