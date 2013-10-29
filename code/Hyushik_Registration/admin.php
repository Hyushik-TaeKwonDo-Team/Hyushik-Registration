<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if(!session_is_registered(myusername)){
	header("location:main_login.php");
}



if (isset($_POST['delete'])){
	unlink("data/registration.csv");	
}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Admin Page</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="css/skeleton.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script>
		 function validate(){
			if (window.confirm('Are you sure that you want to delete the file?')){
			    return true;
			}
			else{
			    return false;
			}
		}
	</script>
</head>
<body>
<body>
	<div class="container">
		<div class="sixteen columns">
			<h5>Admin Page</h5>
			<hr />
		</div>
		<div class="eight columns">
		<?php if ( file_exists('data/registration.csv')):?>
			<p> 
			Download current tournament information
			<a href="download.php?download_file=registration.csv">Download here</a>
			</p>
		<?php else: ?>
			<p> 
			There is no registration.csv right now, one will be created when the first participant registers.
			</p>
		<?php endif; ?>
		</div>
		<div class="eight columns">
			<p> 
			Delete the registration data (THIS CAN NOT BE UNDONE)
			<form action="admin.php" method="post" onsubmit="return validate();">
				<button type="submit" value = "true" name="delete">DELETE Registration</button>
			</form>
			</p>
		</div>
		<a href = "./logout.php"> logout </a>
	</div>

</body>
</html>