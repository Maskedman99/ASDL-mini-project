<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link
      href="https://fonts.googleapis.com/css?family=Saira+Condensed&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <h1>Events</h1>
    <p>
      The Date is :
      <?php echo "Hello World"; ?>
    </p>
    <p>
	<?php
$servername = "localhost";
$username = "root";
$password = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "My SQL Connected successfully";
?> 
</p>
  </body>
</html>
