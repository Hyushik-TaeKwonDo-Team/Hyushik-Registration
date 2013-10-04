<html>
<body>

<?php 
/* The HTML document needs to have the name field defined for _POST

fputcsv

*/
$name =  $_POST["name"];
$email = $_POST["email"];

$list = array($name, $email);
$fp = fopen('registration.csv', 'a');
fputcsv($fp, $list);
fclose($fp);

echo "Name: $name <br>";
echo "Email: $email";
?>

</body>
</html>