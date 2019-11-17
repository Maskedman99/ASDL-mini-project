<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
	
	$name = ( !empty($_GET['name']) ) ? $_GET['name']: "";
	$date = ( !empty($_GET['date']) ) ? $_GET['date']: "";
	$location = ( !empty($_GET['location']) ) ? $_GET['location']: "";
	$tech = ( !empty($_GET['tech']) ) ? $_GET['tech']: "";
	$fees = ( !empty($_GET['fees']) ) ? $_GET['fees']: "";

	$date = date("Y-m-d", strtotime($date));

$query = "INSERT INTO Events (Name, Date, Location, Fees, Tech ) VALUES ('$name', '$date', '$location', $fees,'$tech')";

try{

    if ($conn->query($query) === TRUE) {
        echo "Record Created";
    } else {
        echo "Error Creating record: " . $conn->error;
    }

    //close the connection to DB
    CloseConnection($conn);

}catch(Exception $e)
{
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message </p>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
    <title>Add Events</title>
</head>

<body>
	<h1>Adding Event</h1>	
	</body>
</html>
