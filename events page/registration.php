<?php
	$eventname = ( !empty($_GET['name']) ) ? $_GET['name']: "";	

	echo '<h2>'.$eventname.'</h2>
		  <form action="participantadd.php" method="get">
           	  <fieldset>
			    <legend>Add Your Details</legend>
			        <p>
			            <label for="name">Name:</label>
			            <input name ="name" type="text" placeholder="Enter your name">
			        </p>
			        <p>
			            <label for="class">Class:</label>
			            <input name ="class" type="text">
			        </p>
					<p>
			            <label for="rollno">Roll no:</label>
			            <input name ="rollno" type="text">
			        </p>
					<p>
			            <input name ="eventname" type="hidden" value = "'.$eventname.'">
			        </p>
					<p>
						<input type="submit" value="Register"> &nbsp;&nbsp; 
						<input type="reset">
					</p>
		    	</fieldset>
				</form>';
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="registration.css">
		<title>Registration</title>
	</head>
</html>

