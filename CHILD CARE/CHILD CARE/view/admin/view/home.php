<?php
	session_start();
	if(isset($_SESSION['flag'])){
		if(isset($_COOKIE['flag'])){
			echo"started";
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CLOUD CARE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
	
	<h1>Welcome To CLOUD CARE <?=$_SESSION['user']['username']?> </h1>
	<a href="../controller/logout.php">logout</a> <br>
	<a href="viewProfile.php">view Profile</a><br>
	<a href="addadmin.php">Add admin</a><br>
	</center>
</body>
</html>

<?php
		
	}else{
		header('location: login.php');
	}
?>