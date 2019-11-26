<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
	
	$name = ( !empty($_GET['name']) ) ? $_GET['name']: "";
	$class = ( !empty($_GET['class']) ) ? $_GET['class']: "";
	$rollno = ( !empty($_GET['rollno']) ) ? $_GET['rollno']: "";
	$event = ( !empty($_GET['event']) ) ? $_GET['event']: "";

$query = "DELETE FROM Registration WHERE Name = '$name' and Class = '$class' and Rollno = '$rollno' and Eventname = '$event'";

try{

    if ($conn->query($query) === TRUE) {
        echo "Event Deleted";
    } else {
        echo "Error Deleting event: " . $conn->error;
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
    <title>Remove Participant</title>
</head>

<body>
	<h1>Deleting Entry</h1>	
	</body>
</html>
