<html>
<head>
    <title>Employee</title>
    <style>
        .btn{
            background-color: teal;
            border: none;
            color: white;
            border-radius: 4px; 
            text-decoration: none;
            padding: 5px;
        }

        ::placeholder{
                color: black;
                opacity: 1; 
                text-align: center;
        }
        
        th {border: 2px solid teal;
                text-align: center;
                background-color: teal;
                color: white;
            }
        td {
            cellspacing: 10px;
        }
    </style>
</head>
<body>

<h2>Employee Information </h2><br>

<h4>Insert employee information </h4>
<table>
<form action="insertEmp.php" method="post" name="form1">

<tr><tr>
    <td>Name:</td>
    <td><input type="text" name="name" id="name"></td></tr>

    <tr><td>Job</td>
    <td><input type="text" name="job" id="job"></td></tr>
    
    <tr><td>Experience:</td>
    <td><input type="text" name="exp" id="exp"></td></tr>

    <tr><td><br><input class="btn" type="submit" name="SubmitBtn" id="SubmitBtn" value="Insert details"></td>
</tr>
</form>
</table>

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
    

    $query = "SELECT * FROM employee order by experience";

    $result = mysqli_query($connection_obj, $query);

?>
    
    <br><table align="center">
    <tr><th>ID</th>
    <th>id</th>
    <th>Name</th>
    <th>Job</th>
    <th>Experience</th>
    <th>Delete</th>
    <th>Update</th></tr>

<?php
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

?>
        <tr><form action="updateEmp.php" method="get"><td><?php echo $row['id']; ?></td>
        <td><input type="hidden" name="eid" value="<?php echo $row['id']; ?>"><input style="border:none" type="text" name="id" placeholder="<?php echo $row['id']; ?>"></td>
        <td><input style="border:none" type="text" name="ename" placeholder="<?php echo $row['ename']; ?>"></td>
        <td><input style="border:none" type="text" name="job" placeholder="<?php echo $row['job']; ?>"></td>
        <td><input style="border:none" type="text" name="expe" placeholder="<?php echo $row['experience']; ?>"></td>
        <td><a class='btn' href="delete.php?eid=<?php echo $row['id'] ?>">Delete </a></td>
        <td><input class='btn' type="submit" value="Update"></td></form></tr>
<?php     
     }

     echo "</table>";
}

?> 

</body>
</html>