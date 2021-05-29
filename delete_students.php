<meta http-equiv = "refresh" content = "0; url = students.php" />
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
    $enroll = $_GET["enroll"];
    $sql = "DELETE FROM students WHERE enroll='".$enroll."'";
    mysqli_query($connection_obj, $sql);

}

?> 
