<?php

$authFileName = "config.ini";

$ini_array = parse_ini_file($authFileName, true);

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

$passCheck = ($mypassword === $ini_array['ADMIN_LOGIN']['password']);
$nameCheck = ($myusername === $ini_array['ADMIN_LOGIN']['userName']);

if($passCheck && $nameCheck){

// Register $myusername, $mypassword and redirect to file "admin.php"
session_register("myusername");
session_register("mypassword"); 
header("location:admin.php");

}
else {
header("location:admin.php");

}

?>
