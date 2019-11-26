<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
?>

<?php
	if ($_GET["E"]=="Y")
	{
		$events = mysqli_query($conn, "select Name, Date, Location, Fees from Events where Tech = 'Y'"); 
	}
	else
	{
		$events = mysqli_query($conn, "select Name, Date, Location, Fees from Events where Tech = 'N'");
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="events.css">
	<title>EVENTS</title>
</head>

<body>
	<?php
		echo '<table>';
	        echo '<th>Name</th>';
	        echo '<th>Date</th>';
			echo '<th>Location</th>';
			echo '<th>Fees</th>'; 
			echo '<br/>';
	
		while ($row = $events->fetch_assoc()) 
		{
			echo "<tr><form action=\"registration.php\" method=\"get\">";
	    		echo "<td><input type='text' name='name' value='" . $row['Name'] .  "' readonly></td>";
				echo "<td>".$row['Date']."</td>";
				echo "<td>".$row['Location']."</td>";
				echo "<td>".$row['Fees']."</td>";
				echo "<td><input type=\"submit\" value=\"Register\"></td>";
    	    echo "</form></tr>";
		}
		echo '</table>';
	?>
</body>
</html>

