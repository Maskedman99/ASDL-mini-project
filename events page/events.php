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
		while ($row = $events->fetch_assoc()) 
		{
    		echo $row['Name'];
		}
	?>
</body>
</html>

