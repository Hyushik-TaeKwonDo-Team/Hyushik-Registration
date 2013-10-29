<html>
<body>
<head>

	<meta charset="utf-8">
	<title>Tournament Registration</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="css/skeleton.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">Tioga Tae Kwon Do</h1>
			<h5>Tournament Registration</h5>
			<hr />
		</div>
		<div class="sixteen columns">
<?php 

  $cfg_array = parse_ini_file ("config/config.ini",0);
  if ($cfg_array['captcha_active'] == "true"){
	require_once('\lib\recaptcha\1_11\recaptchalib.php');
	$privatekey = $cfg_array['private_key'];
	$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

	if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
		echo "<a href='http://localhost/HyushikRegistration'> The reCAPTCHA wasn't entered correctly. Click here to try again." . "(reCAPTCHA said: " . $resp->error . ")";
		die ();
	} else {
    // Your code here to handle a successful verification
	}
}
  

/* If reigstration file dones't exist, create it with comlumns */
if(!file_exists('data/registration.csv')){
	/* Check .ini file for board sizes columns */
	$authFileName = "config/config.ini";
	$ini_array = parse_ini_file($authFileName, true);
	$size_array = $ini_array['BOARD_SIZES']['size'];
	$list = array("Name", "Email", "Address", "City", "State", "Zip", "Phone", "Gender", "Instructor Name", "School Name", "School Address", "School City", "School State", "School Zip", "School Phone", "School Email", "Rank", "Age", "Weight", "Weapons", "Breaking", "Forms", "Sparring (Point)", "Sparring (Olympic)");
	$result = array_merge($list, $size_array);

	$fp = fopen('data/registration.csv', 'a');
	fputcsv($fp, $result);
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
if(isset($_POST['forms'])){ $forms = "Yes"; }
else{ $forms = "No"; }
if(isset($_POST['point'])){ $point = "Yes"; }
else{ $point = "No"; }
if(isset($_POST['olympic'])){ $olympic = "Yes"; }
else{ $olympic = "No"; }
$boards =  $_POST["boards"];


$list = array($name, $email, $address, $city, $state, $zip, $phone, $gender, $instructor, $schoolname, $schooladdress, $schoolcity, $schoolstate, $schoolzip, $schoolphone, $schoolemail, $rank, $age, $weight, $weapons, $breaking, $forms, $point, $olympic );
/* merge list array and boards array*/
$result = array_merge($list, $boards);

/* Open csv file and write to it */
$fp = fopen('data/registration.csv', 'a');
fputcsv($fp, $result);
fclose($fp);

echo "You have successfully registered for the tournament, $name."

?>
		</div>
	</div>
</body>
</html>