<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
?>

<?php
	$u = 0;
	$p = 0;
	$names = mysqli_query($conn, "select Name, Password from Admin");

	while ($row = $names->fetch_assoc()) 
	{
    	if($row['Name'] == $_GET["uname"]) 
    	{
			$u = 1;
			if($row['Password'] == $_GET["psw"])
			{
				$p = 1;
			} 
    	}
	}
?>
 
<html>

<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Login</title>
</head>

<body>
	<?php
		if( $u == 0 || $p == 0)
		{
			echo 'LOGIN UNSUCCESFULL'.'<br/>';
			echo 'Username or Password is incorrect. Please try again.';
		}			
		else
		{
			echo 'LOGIN SUCCESFULL'.'<br/>';
			echo 'Welcome '.$_GET["uname"].'<br/>';

//	Add an Event 
			echo '<form action="add.php" method="get">
            	  <fieldset>
				    <legend>Add an Event</legend>
				        <p>
				            <label for="name">Name:</label>
				            <input name ="name" type="text" placeholder="Event-Name">
				        </p>
				        <p>
				            <label for="date">Date:</label>
				            <input name ="date" type="date">
				        </p>
						<p>
				            <label for="location">Location:</label>
				            <input name ="location" type="text">
				        </p>
						<p>
				            <label for="fees">Fees:</label>
				            <input name ="fees" type="text">
				        </p>
						<p>
				            <label for="tech">Tech (Y/N):</label>
				            <input name ="tech" type="text">
				        </p>
						<p>
							<input type="submit" value="Add New Record"> &nbsp;&nbsp; 
							<input type="reset">
						</p>
			    	</fieldset>
					</form>';

//	Delete an event

		$result = mysqli_query($conn, "select Name, Date, Location, Fees, Tech from Events");
		echo '<fieldset>';
		echo '<legend>Delete an Event</legend>';
		echo '<table>';
	    echo '<th>NAME</th>';
    	echo '<th>DATE</th>';
		echo '<th>LOCATION</th>';
    	echo '<th>FEES</th>';
		echo '<th>TECH</th>';
    	echo '<th>OPERATION</th>';

	    while ($events = $result->fetch_assoc()) 
		{
	        echo "<tr><form action=\"delete.php\" method=\"get\">";
    	    echo "<td><input type='text' name='name' value='" . $events['Name'] .  "' readonly></td>";
    	    echo "<td><input type='text' value='" . $events['Date'] .  "' readonly></td>";
			echo "<td><input type='text' value='" . $events['Location'] .  "' readonly></td>";
    	    echo "<td><input type='text' value='" . $events['Fees'] .  "' readonly></td>";
			echo "<td><input type='text' value='" . $events['Tech'] .  "' readonly></td>";
    	    echo "<td><input type=\"submit\" value=\"Delete\"></td>";
    	    echo "</form></tr>";
	    }

	    echo '</table><hr><br><br></fieldset>';
		}
	?>
</body>

</html> 
