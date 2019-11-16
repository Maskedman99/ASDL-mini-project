<?php
include ($_SERVER['DOCUMENT_ROOT'].'/config.php');
$conn = OpenConnection();
?>

<?php
$names = mysqli_query($conn, "select Name from Admin");
/*	TO PRINT $names 
while ($row = $names->fetch_assoc()) {
    echo $row['Name']."<br>";
}
*/
?>
 
<html>
<body>

Welcome <?php echo $_GET["uname"]; ?><br>
Your password is: <?php echo $_GET["psw"]; ?>

</body>
</html> 
