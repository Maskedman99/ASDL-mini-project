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
			echo 'LOGIN UNSUCCESFULL';
			echo 'Username or Password is incorrect. Please try again.';
		}			
		else
		{
			echo 'LOGIN SUCCESFULL';
			echo 'Welcome ';
			echo $_GET["uname"];  
		}
	?>
</body>

</html> 
