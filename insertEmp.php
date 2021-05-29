<meta http-equiv = "refresh" content = "0; url = emp.php" />
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
        
        $name = $_POST["name"];
        $job = $_POST["job"];
        $exp = $_POST["exp"];
        echo $name;
        echo $job;
        echo $exp;
        
                
    $query = "INSERT INTO employee(ename, job, experience)
                VALUES ('". mysqli_real_escape_string($connection_obj, $name) ."',
                        '". mysqli_real_escape_string($connection_obj, $job) ."',
                        '". mysqli_real_escape_string($connection_obj, $exp) ."')";

    mysqli_query($connection_obj, $query);

    }
}
?>