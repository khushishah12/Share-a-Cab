<?php

	$email = $_POST['Email'];
	$user=$_POST['UNM'];
	$password1=$_POST['PW'];

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
		$sql1 = "Select user_Name,pasword_hash from cab_participants where user_Name='".$user."'";
		$result1 = $conn->query($sql1);
		if ($result1->num_rows > 0) 
		{
			echo "Username is in use ";
		}
		else
		{

			$sql2 = "Select user_Name,pasword_hash from cab_participants where email='".$email."'";
			$result2 = $conn->query($sql2);
			if ($result2->num_rows > 0) 
			{
				echo "Email is in use ";
			}
			else
			{
				$sql = "INSERT INTO cab_participants (user_Name, pasword_hash, email) VALUES ('".$user."','".password_hash($password1, PASSWORD_DEFAULT)."','". $email."')";
				if ($conn->query($sql) === TRUE) 
				{
					echo "1";
				}
				else 
				{
		  			echo "Error: " . $sql . "<br>" . $conn->error;
					echo($sql);
				}
			}
		}
	}
	$conn->close();
	
?>