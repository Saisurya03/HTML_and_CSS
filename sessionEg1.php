<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "<b>Name:</b> " . $_SESSION["name"] . ".<br>";
echo "<b>Enrollment:</b> " . $_SESSION["enroll"] . ".";
?>

</body>
</html>