<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$conn = OpenConnection();
	
	$name = ( !empty($_GET['name']) ) ? $_GET['name']: "";

$query = "DELETE FROM Events WHERE Name = '$name'";

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
    <title>Remove Events</title>
</head>

<body>
	<h1>Deleting Event</h1>	
	</body>
</html>
