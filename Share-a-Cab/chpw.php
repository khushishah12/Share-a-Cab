<?php
	$user_name=$_POST['user_name'];
	$old_pass=$_POST['old_pass'];
	$pass=$_POST['pass'];
	session_start();
	if($old_pass==$_SESSION["password"])
	{
		$servername = "118.139.181.71";
		$database = "c12";
		$username = "Khushi";
		$password = "Alpesh@01";
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Connection Check
		if (!$conn) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			$sql1 = "update cab_participants set pasword_hash='".password_hash($pass, PASSWORD_DEFAULT)."' where user_Name='".$user_name."'";
			$conn->query($sql1);
			echo "Password Changed successfully";
		}
	}
	else
	{
		echo("Old password do not match");
	}

 ?>