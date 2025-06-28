<?php
	$user_name=$_POST['user_name'];
	$dt=$_POST['departure_date'];
	$Source=$_POST['Source'];
	$Destination=$_POST['Destination'];
	$seats=$_POST['seats'];
	$points=$_POST['points'];
	$Gender_pref=$_POST['Gender_pref'];
	$driver_name=$_POST['driver_name'];
	$contact_info=$_POST['contact_info'];
	$License_details=$_POST['License_details'];
	$car_make=$_POST['car_make'];
	$car_model=$_POST['car_model'];
	$car_rc_detail=$_POST['car_rc_detail'];	
	$smoking_preference=$_POST['smoking_preference'];
	$pets_allowed=$_POST['pets_allowed'];
	$music_preferences=$_POST['music_preferences'];


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
		$sql1 = "insert into cab_rides (date_time,source,destination,seats,points,Gender_pref,driver_name,Contact,License_details,car_make,car_model,car_rc_detail,smoking_pref,pets_allowed,music_ok,Created_by) ";
		$sql1 = $sql1." values ('".$dt."' ,'".$Source."','".$Destination."',".$seats.",".$points.",'". $Gender_pref."','".$driver_name."','".$contact_info."','".$License_details ."','".$car_make."','".$car_model."','".$car_rc_detail."','".$smoking_preference."','".$pets_allowed."','".$music_preferences."','".$user_name."')";
		$conn->query($sql1);
		
		echo "Cab Sharing Data Created Successfully";
		 
	}
	$conn->close();
?>
