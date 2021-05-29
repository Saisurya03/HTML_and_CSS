<html>
<head>
    <title>Students</title>
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

<h2>Students Information </h2><br>

<h4>Insert Student information </h4>
<table>
<form action="insert.php" method="post" name="form1">

<tr><tr><td>Enrollment number:</td>
    <td><input type="text" name="enroll" id="enroll"></td></tr>

    <td>Name:</td>
    <td><input type="text" name="sname" id="sname"></td></tr>

    <tr><td>Semester</td>
    <td><input type="text" name="sem" id="sem"></td></tr>
    
    <tr><td>Gender:</td>
    <td><input type="radio" name="gen" value="female">Female &nbsp &nbsp
        <input type="radio" name="gen" value="male">Male</td></tr>

    <tr><td>Qualification:</td>
    <td><input type="text" name="ql" id="ql"></td></tr>

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
    

    $query = "SELECT * FROM students order by enroll";

    $result = mysqli_query($connection_obj, $query);

?>
    
    <br><table align="center">
    <tr><th>ID</th>
    <th>Enrollment</th>
    <th>Name</th>
    <th>Semester</th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Delete</th>
    <th>Update</th></tr>

<?php
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

?>
        <tr><form action="update.php" method="get"><td><?php echo $row['id']; ?></td>
        <td><input type="hidden" name="sid" value="<?php echo $row['id']; ?>"><input style="border:none" type="text" name="enroll" placeholder="<?php echo $row['enroll']; ?>"></td>
        <td><input style="border:none" type="text" name="sname" placeholder="<?php echo $row['sname']; ?>"></td>
        <td><input style="border:none" type="text" name="sem" placeholder="<?php echo $row['sem']; ?>"></td>
        <td><input style="border:none" type="text" name="gen" placeholder="<?php echo $row['gender']; ?>"></td>
        <td><input style="border:none" type="text" name="ql" placeholder="<?php echo $row['qualification']; ?>"></td>
        <td><a class='btn' href="delete_students.php?enroll=<?php echo $row['enroll'] ?>">Delete </a></td>
        <td><input class='btn' type="submit" value="Update"></td></form></tr>
<?php     
     }

     echo "</table>";
}

?> 

</body>
</html>