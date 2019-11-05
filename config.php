<?php

function OpenConnection()
{
	$servername = "localhost";
	$username   = "root";		//Enter Username
	$password   = "";		//Enter Password
	$database   = "ASD"		//Enter Database name
// Create connection
	$conn = new mysqli($servername, $username, $password, $database) or die("Connect failed: %s\n". $conn -> error);

	return $conn;
}

function CloseCon($conn)
{
	$conn -> close();
}

?>

