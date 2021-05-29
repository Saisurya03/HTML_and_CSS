<?php
$cookie_name = "name";
$cookie_value = "Saisurya Anbazhagan Vanniyar";
setcookie($cookie_name, $cookie_value, time() + 86400, "/");
?>
<!DOCTYPE html>
<html>
<body>
Cookie set<br>

<?php
if(isset($_COOKIE[$cookie_name])){
    echo "<b>Cookie Name:</b> " . $cookie_name . "<br>";
    echo "<b>Cookie Value:</b> " . $_COOKIE[$cookie_name] . "<br>";
}

?>
</body>
</html>