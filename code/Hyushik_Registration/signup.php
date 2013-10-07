<html>
<body>

<?php 

/* If reigstration file dones't exist, create it with comlumns */
if(!file_exists('registration.csv')){
	$list = array('Name', 'Email', 'Address', 'City', 'State', 'Zip', 
            'Phone', 'Gender', 'Instructor Name', 'School Name', 
            'School Address', 'School City', 'School State', 'School Zip', 
            'School Phone', 'School Email', 'Rank', 'Age', 'Weight', 'Weapons', 
            'Breaking', 'Sparring', 'Point', 'Olympic', 'Boards' );
	$fp = fopen('registration.csv', 'a');
	fputcsv($fp, $list);
	fclose($fp);
}

/* Participant Info */
$name =  $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$phone = $_POST["phone"];
$gender = $_POST["gender"]; //Will throw an error if not set

/* School */
$instructor =  $_POST["instructor"];
$schoolname =  $_POST["schoolname"];
$schooladdress =  $_POST["schooladdress"];
$schoolcity =  $_POST["schoolcity"];
$schoolstate =  $_POST["schoolstate"];
$schoolzip =  $_POST["schoolzip"];
$schoolphone =  $_POST["schoolphone"];
$schoolemail =  $_POST["schoolemail"];

/* Event */
$rank =  $_POST["rank"];
$age =  $_POST["age"];
$weight =  $_POST["weight"];
if(isset($_POST['weapons'])){ $weapons = "Yes"; }
else{ $weapons = "No"; }
if(isset($_POST['breaking'])){ $breaking = "Yes"; }
else{ $breaking = "No"; }
if(isset($_POST['sparring'])){ $sparring = "Yes"; }
else{ $sparring = "No"; }
if(isset($_POST['point'])){ $point = "Yes"; }
else{ $point = "No"; }
if(isset($_POST['olympic'])){ $olympic = "Yes"; }
else{ $olympic = "No"; }
$boards =  $_POST["boards"];


$list = array($name, $email, $address, $city, $state, $zip, $phone, $gender, $instructor, $schoolname, $schooladdress, $schoolcity, $schoolstate, $schoolzip, $schoolphone, $schoolemail, $rank, $age, $weight, $weapons, $breaking, $sparring, $point, $olympic, $boards );
$fp = fopen('registration.csv', 'a');
fputcsv($fp, $list);
fclose($fp);

echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Weapons: $weapons";

?>

</body>
</html>