<meta http-equiv="refresh" content="0; url = students.php" />

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
    $name = $_GET["sname"];
    $sem = $_GET["sem"];
    $gen = $_GET["gen"];
    $ql = $_GET["ql"];
    $id = $_GET["sid"];

    echo $id;
    echo $enroll;
    if($enroll != ""){
        $sql = "UPDATE students SET enroll=". $enroll . " WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($name != ""){
        $sql = "UPDATE students SET sname='". $name . "' WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($sem != ""){
        $sql = "UPDATE students SET sem=". $sem . " WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($gen != ""){
        echo $gen;
        $sql = "UPDATE students SET gender='". $gen . "' WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

    if($ql != ""){
        $sql = "UPDATE students SET qualification=". $ql . " WHERE id = $id" ;
        mysqli_query($connection_obj, $sql);
    }

}

?> 
