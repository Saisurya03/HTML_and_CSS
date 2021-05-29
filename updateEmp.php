<meta http-equiv="refresh" content="0; url = emp.php" />

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
    $ename = $_GET["ename"];
    $job = $_GET["job"];
    $exp = $_GET["expe"];
    $id = $_GET["eid"];

    echo $id;
    echo $ename;
    echo $exp;

    if($ename != ""){
        $sql = "UPDATE employee SET ename='". $ename . "' WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($job != ""){
        $sql = "UPDATE employee SET job='". $job . "' WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($exp != ""){
        $sql = "UPDATE employee SET experience=". $exp . " WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }


}

?> 
