<?php
	$user_name=$_POST['user_name'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$contact_no=$_POST['contact_no'];
	$dl_no=$_POST['dl_no'];
	$rc_no=$_POST['rc_no'];
	$Aadhar_no=$_POST['Aadhar_no'];
	$car_company=$_POST['car_company'];
	$car_model=$_POST['car_model'];
	$car_color=$_POST['car_color'];

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
		$sql1 = "update cab_participants set First_Name='".$first_name."' where user_Name='".$user_name."'";
		$sql2 = "update cab_participants set Last_Name='".$last_name."' where user_Name='".$user_name."'";
		$sql3 = "update cab_participants set dob='".$dob."' where user_Name='".$user_name."'";
		$sql4 = "update cab_participants set gender='".$gender."' where user_Name='".$user_name."'";
		$sql5 = "update cab_participants set Contact_no='".$contact_no."' where user_Name='".$user_name."'";
		$sql6 = "update cab_participants set DL_NO='".$dl_no."' where user_Name='".$user_name."'";
		$sql7 = "update cab_participants set RC_no='".$rc_no."' where user_Name='".$user_name."'";
		$sql8 = "update cab_participants set Aadhar_no='".$Aadhar_no."' where user_Name='".$user_name."'";
		$sql9 = "update cab_participants set car_company='".$car_company."' where user_Name='".$user_name."'";
		$sql10 = "update cab_participants set car_model='".$car_model."' where user_Name='".$user_name."'";
		$sql11 = "update cab_participants set car_color='".$car_color."' where user_Name='".$user_name."'";


		$conn->query($sql1);
		$conn->query($sql2);
		$conn->query($sql3);
		$conn->query($sql4);
		$conn->query($sql5);
		$conn->query($sql6);
		$conn->query($sql7);
		$conn->query($sql8);
		$conn->query($sql9);
		$conn->query($sql10);
		$conn->query($sql11);

		echo "Profile updated successfully";
		 


	}
 ?>