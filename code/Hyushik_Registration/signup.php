<html>
<body>

<?php 
/* The HTML document needs to have the name field defined for _POST*/
$name =  $_POST["name"];
$email = $_POST["email"];

echo "Name: $name <br>";
echo "Email: $email";
?>

</body>
</html>