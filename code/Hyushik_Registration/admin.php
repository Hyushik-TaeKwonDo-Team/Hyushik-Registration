<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if(!session_is_registered(myusername)){
	header("location:main_login.php");
}



if (isset($_POST['delete'])){
	unlink("registration.csv");	
}
?>

<html>
<body>
Admin Page

<!--
	export 
-->
<p> link to csv file <a href = "./registration.csv"> csv </a> </p>

<!--
	delete 
-->
<p> Delete the registration data (THIS CAN NOT BE UNDONE)
<form action="admin.php" method="post">
<button type="submit" value = "true" name="delete">
DELETE
</button>
</form>

</p>

<!--
	logout  
-->
<a href = "./logout.php"> logout </a>

</body>
</html>