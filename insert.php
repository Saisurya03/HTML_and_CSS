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
    
    if(isset($_POST['SubmitBtn'])){
        
        $enroll = $_POST["enroll"];
        $name = $_POST["sname"];
        $sem = $_POST["sem"];
        $gen = $_POST["gen"];
        $ql = $_POST["ql"];

        
                
    $query = "INSERT INTO students(enroll, sname, sem, gender, qualification)
                VALUES ('". mysqli_real_escape_string($connection_obj, $enroll) ."',
                        '". mysqli_real_escape_string($connection_obj, $name) ."',
                        '". mysqli_real_escape_string($connection_obj, $sem) ."',
                        '". mysqli_real_escape_string($connection_obj, $gen) ."',
                        '". mysqli_real_escape_string($connection_obj, $ql) ."')";

    mysqli_query($connection_obj, $query);

    }
}
?>