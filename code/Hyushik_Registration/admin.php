<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
Admin Page
<!--
	start/stop registration  
-->
<p> toggle to start or stop the registration session </p>

<!--
	export 
-->
<p> link to csv file </p>


<!--
	delete 
-->
<p> button/ conformation to delete csv file </p>

</body>
</html>