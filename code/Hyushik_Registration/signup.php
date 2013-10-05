<html>
<body>

<?php 

/*Participant Info*/
$name =  $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];


$list = array($name, $email);
$fp = fopen('registration.csv', 'a');
fputcsv($fp, $list);
fclose($fp);

echo "Name: $name <br>";
echo "Email: $email";

?>

</body>
</html>