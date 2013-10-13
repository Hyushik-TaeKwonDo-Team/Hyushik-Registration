<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
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

	<script>
	  function validate(){
	  var elems = document.getElementsByClassName('required');
	  var allgood = true;

	  //Loop through all elements with the "required" class
	  for( var i = 0; i < elems.length; i++ ) {
	    if( !elems[i].value || !elems[i].value.length ) {
	    	if(hasClass(elems[i],"small")){
	    		elems[i].className = "small required error";
	    	}else{
	    		elems[i].className = "required error";
	    	}
	    	allgood = false;
	    }else if(hasClass(elems[i],"error")){
	    	if(hasClass(elems[i],"small")){
	    		elems[i].className = "small required";
	    	}else{
	    		elems[i].className = "required";
	    	}
	    }
	  }

	  //If there was a required form not filled in return false
	  if( !allgood ) {
	    alert( "Please fill in all the required fields." );
	    return false;
	  }

	  return true;
	  }

	  function hasClass(element, cls) {
    	return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	  }
	</script>
</head>
<body>



	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">Tioga Tae Kwon Do</h1>
			<h5>Tournament Registration</h5>
			<a href = "admin.php" style = "float:right">Admin Login</a>
			<hr />
		</div>
		<form onsubmit="return validate();" action="signup.php" method="post">
		<div class="one-third column">
			<h3>Participant Info</h3>
			
			  <label for="name">Name *</label>
			  <input type="text" id="name" name="name" class="required" />
			  <label for="email">Email *</label>
			  <input type="text" id="email" name="email" class="required"/>
			  <label for="address">Address *</label>
			  <input type="text" id="address" name="address" class="required"/>
			  <label for="city">City *</label>
			  <input type="text" id="city" name="city" class="required"/>
			  <ul><li>
			  <label for="state">State *</label>
			  <input type="text" id="state" class="small required" name="state" />
			  </li><li>
			  <label for="zip">Zip Code *</label>
			  <input type="text" id="zip" class="small required" name="zip" />
			  </li></ul>
			  <label for="phone">Phone *</label>
			  <input type="text" id="phone" name="phone" class="required"/>

			    <fieldset>
		    <label for="">Gender *</label>
		    <label for="male">
		      <input type="radio" id="male" value="male" name="gender" checked="checked"/>
		      <span>Male</span>
		    </label>
		    <label for="female">
		      <input type="radio" id="female" value="female" name="gender" />
		      <span>Female</span>
		    </label>
		  </fieldset>

		</div>

		<div class="one-third column">
			<h3>School Info</h3>
			  <label for="instructor">Instructor *</label>
			  <input type="text" id="instructor" name="instructor" class="required"/>
			  <label for="schoolname">Martial Arts School *</label>
			  <input type="text" id="schoolname" name="schoolname" class="required"/>
			  <label for="schooladdress">School Address</label>
			  <input type="text" id="schooladdress" name="schooladdress" />
			  <label for="schoolcity">City</label>
			  <input type="text" id="schoolcity" name="schoolcity" />
			  <ul><li>
			  <label for="schoolstate">State</label>
			  <input type="text" id="schoolstate" class="small" name="schoolstate" />
			  </li><li>
			  <label for="schoolzip">Zip Code</label>
			  <input type="text" id="schoolzip"class="small" name="schoolzip" />
			  </li></ul>
			  <label for="schoolphone">Phone</label>
			  <input type="text" id="schoolphone" name="schoolphone" />
			  <label for="schoolemail">Email</label>
			  <input type="text" id="schoolemail" name="schoolemail" />
		</div>

		<div class="one-third column">
			<h3>Ranking / Events</h3>

			  <label for="rank">Rank *</label>
			  <select id="rank" name="rank" class="required">
			    <option value="White">White</option>
			    <option value="Yellow/Orange">Yellow/Orange</option>
			    <option value="Green">Green</option>
			    <option value="Blue">Blue</option>
			    <option value="Brown/Red">Brown/Red</option>
			    <option value="Black">Black</option>
			  </select>
			 
			  <ul><li>
			  <label for="age">Age *</label>
			  <input type="text" id="age" class="small required" name="age" />
			  </li><li> 
			  <label for="weight">Weight (lbs) *</label>
			  <input type="text" id="weight" class="small required" name="weight" />
			  </li>
			  </ul>	 
			 
			  <fieldset>
			    <label for="">Events *</label>
			    <label for="Weapons">
			      <input type="checkbox" value="Weapons" id="Weapons" name="weapons" />
			      <span>Weapons</span>
			    </label>
			    <label for="Breaking">
			      <input type="checkbox" value="Breaking" id="Breaking" name="breaking" />
			      <span>Breaking</span>
			    </label>
			    <label for="Forms">
			      <input type="checkbox" value="Forms" id="Forms" name="forms" />
			      <span>Forms</span>
			    </label>
			    <label for="Point">
			      <input type="checkbox" value="Point" id="Point" name="point" />
			      <span>Sparring (Point)</span>
			    </label>
			    <label for="Olympic">
			      <input type="checkbox" value="Olympic" id="Olympic" name="olympic" />
			      <span>Sparring (Olympic)</span>
			    </label>
			  </fieldset>


			  <label>Number of Boards (optional)</label>
			  <?php
				$authFileName = "config.ini";
				$ini_array = parse_ini_file($authFileName, true);
				$size_array = $ini_array['BOARD_SIZES']['size'];
				echo "<ul>";
				foreach ($size_array as $size_item) {
					echo "<li><label>$size_item</label>\n";
					echo "<input type=\"text\" class=\"xsmall lowbottom\" id=\"$size_item\"name=\"boards[]\" value=\"0\" /></li>\n";
				}
				echo "</ul>";
			  ?>
		</div>

		<div class="sixteen columns">
			<button id="submitButton" type="submit" style="float:right">Submit Form</button>
		</div>
		
		<?php
			$cfg_array = parse_ini_file ("config.ini",0);
				if ($cfg_array['captcha_active'] == "true"){
					require_once('lib/recaptcha/1_11/recaptchalib.php');
					$publickey = "6LeVtugSAAAAABZdvlAj2TtIqXmPI2nD1Ub8n2uA"; // you got this from the signup page
					echo recaptcha_get_html($publickey);
				}
		?>

		</form>
	</div><!-- container -->

</body>
</html>