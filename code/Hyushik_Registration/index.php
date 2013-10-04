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
</head>
<body>



	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">Tioga Tae Kwon Do</h1>
			<h5>Tournament Registration</h5>
			<hr />
		</div>
		<form action="">
		<div class="one-third column">
			<h3>Participant Info</h3>
			
			  <label for="name">Name *</label>
			  <input type="text" id="name" />
			  <label for="email">Email *</label>
			  <input type="email" id="email" />
			  <label for="address">Address *</label>
			  <input type="text" id="address" />
			  <label for="city">City *</label>
			  <input type="text" id="city" />
			  <ul><li>
			  <label for="state">State *</label>
			  <input type="text" id="state" class="small" />
			  </li><li>
			  <label for="zip">Zip Code *</label>
			  <input type="text" id="zip"class="small" />
			  </li></ul>
			  <label for="phone">Phone *</label>
			  <input type="text" id="phone" />

			    <fieldset>
		    <label for="">Gender *</label>
		    <label for="male">
		      <input type="radio" name="male" id="male" value="male" />
		      <span>Male</span>
		    </label>
		    <label for="female">
		      <input type="radio" name="female" id="female" value="female" />
		      <span>Female</span>
		    </label>
		  </fieldset>

		</div>

		<div class="one-third column">
			<h3>School Info</h3>
			  <label for="instructor">Instructor *</label>
			  <input type="text" id="instructor" />
			  <label for="schoolname">Martial Arts School *</label>
			  <input type="text" id="schoolname" />
			  <label for="schooladdress">School Address</label>
			  <input type="text" id="schooladdress" />
			  <label for="schoolcity">City</label>
			  <input type="text" id="schoolcity" />
			  <ul><li>
			  <label for="schoolstate">State</label>
			  <input type="text" id="schoolstate" class="small" />
			  </li><li>
			  <label for="schoolzip">Zip Code</label>
			  <input type="text" id="schoolzip"class="small" />
			  </li></ul>
			  <label for="schoolphone">Phone</label>
			  <input type="text" id="schoolphone" />
			  <label for="schoolemail">Email</label>
			  <input type="text" id="schoolemail" />
		</div>

		<div class="one-third column">
			<h3>Ranking / Events</h3>

			  <label for="rank">Rank *</label>
			  <select id="rank">
			    <option value="White">White</option>
			    <option value="Yellow/Orange">Yellow/Orange</option>
			    <option value="Green">Green</option>
			    <option value="Blue">Blue</option>
			    <option value="Brown/Red">Brown/Red</option>
			    <option value="Black">Black</option>
			  </select>
			 
			  <ul><li>
			  <label for="age">Age *</label>
			  <input type="text" id="age" class="small" />
			  </li><li> 
			  <label for="weight">Weight (lbs) *</label>
			  <input type="text" id="weight" class="small" />
			  </li>
			  </ul>	 
			 
			  <fieldset>
			    <label for="">Events *</label>
			    <label for="Weapons">
			      <input type="checkbox" value="Weapons" id="Weapons"/>
			      <span>Weapons</span>
			    </label>
			    <label for="Breaking">
			      <input type="checkbox" value="Breaking" id="Breaking"/>
			      <span>Breaking</span>
			    </label>
			    <label for="Sparring">
			      <input type="checkbox" value="Sparring" id="Sparring"/>
			      <span>Sparring</span>
			    </label>
			    <label for="Point">
			      <input type="checkbox" value="Point" id="Point"/>
			      <span>Point</span>
			    </label>
			    <label for="Olympic">
			      <input type="checkbox" value="Olympic" id="Olympic" />
			      <span>Olympic</span>
			    </label>
			  </fieldset>

			  <label for="boards">Number of Boards (optional)</label>
			  <input type="text" id="boards" class="small" />
		</div>

		<div class="sixteen columns">
			<button type="submit" style="float:right">Submit Form</button>
		</div>

		</form>
	</div><!-- container -->

</body>
</html>