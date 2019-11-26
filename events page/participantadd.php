<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
	
	$name = ( !empty($_GET['name']) ) ? $_GET['name']: "";
	$class = ( !empty($_GET['class']) ) ? $_GET['class']: "";
	$rollno = ( !empty($_GET['rollno']) ) ? $_GET['rollno']: "";
	$eventname = ( !empty($_GET['eventname']) ) ? $_GET['eventname']: "";

$query = "INSERT INTO Registration (Name, Class, Rollno, Eventname) VALUES ('$name', '$class', '$rollno', '$eventname')";

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
    <title>Register for Events</title>
</head>

<body>
	<h1>Adding Participant</h1>	
	</body>
</html>
