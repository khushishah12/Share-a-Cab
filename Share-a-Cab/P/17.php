<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	fieldset 
	{
        	border: 2px solid #ddd;
		padding: 10px;
		margin-bottom: 20px;
        }
        legend 
	{
		font-weight: bold;
        }
        label 
	{
		display: block;
		margin-top: 5px;
        }
        input, select, textarea 
	{
		margin-top: 2px;
		margin-bottom: 2px;
        }
        /* Adjusting the size of the input fields */
        input[type="date"],
        input[type="number"],
        input[type="tel"],
        input[type="text"],
        select 
	{
		padding: 8px;
		width: auto;
		min-width: 150px;  /* Minimum width to make sure the fields aren't too narrow */
        }
        /* For larger text inputs like Car Details */
        input[type="text"][id="car-details"] 
	{
		min-width: 300px;
        }
        button 
	{
		padding: 10px 15px;
		background-color: #4CAF50;
		color: white;
		border: none;
		cursor: pointer;
		font-size: 16px;
        }
        button:hover 
	{
		background-color: #45a049;
        }
	/* Centering the div using Flexbox */
	.centered-div 
	{
		display: flex;
		justify-content: center; /* Horizontally centers the div */
		align-items: center;     /* Vertically centers the div */
		height: 100vh;           /* Full viewport height */
	}
	.centered-div-content 
	{
		    /* Your content style */
		padding: 20px;
		background-color: lightblue;
		border-radius: 8px;
	}
</style>
<?php
$servername = "118.139.181.71";
$database = "c12";
$username = "Khushi";
$password = "Alpesh@01";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cab_participants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
?>	

<div class="centered-div">
	<div class="centered-div-content">
		<h1 align="center">User Profile for <?php echo $un;  ?></h1>
		
		<table border=0>
		<tr>
			<td>
				<input type="hidden" id="user-name" name="user-name" value="<?php echo $un; ?>" required>
		        <!-- Ride Information -->
		        <fieldset>
				<legend>User Information</legend>
				<label for="first-name">First Name :</label>
				<input type="text" id="first-name" name="first-name" value="<?php echo $row["First_Name"]; ?>" >

				<label for="last-name">Last Name:</label>
				<input type="text" id="last-name" name="last-name" value="<?php echo $row["Last_Name"]; ?>">
				<label for="dob">Date of Birth :</label>
				<input type="date" id="dob" name="dob"  value="<?php echo $row["DOB"]; ?>">
				<label for="gender"> Gender :</label>
				<select id="gender" name="gender" required>
					<?php if ($row["gender"]=="Male")
					{  ?>
						<option value="Male" selected >Male</option>
						<option value="Female">Female</option>
					<?php }
					else
					{ ?>
						<option value="Male">Male</option>
						<option value="Female" selected>Female</option>
					<?php } ?>
				</select>
				<label for="contact_no">Contact No :</label>
				<input type="text" id="contact_no" name="contact_no" value="<?php echo $row["Contact_no"]; ?>" >
				<label for="email">Email :</label>
				<input type="text" id="email" name="email" value="<?php echo $row["email"]; ?>" readonly  >
			</fieldset>
			</td>
		        <!-- Seats and Price -->
		        <td>
			<fieldset>
				<legend>Vehicle Information </legend>
				<label for="dl-no"> Driving Licence No :</label>
				<input type="text" id="dl-no" name="dl-no" value="<?php echo $row["DL_NO"]; ?>" >
				<label for="rc-no"> Vehicle RC-No :</label>
				<input type="text" id="rc-no" name="rc-no" value="<?php echo $row["RC_no"]; ?>">
				<label for="Aadhar_no"> Aadhar Card  No :</label>
				<input type="text" id="Aadhar_no" name="Aadhar_no" value="<?php echo $row["Aadhar_no"]; ?>" >
				<label for="car_company">Car Company</label>
				<input type="text" id="car_company" name="car_company" value="<?php echo $row["car_company"]; ?>">
				<label for="car-model">Model:</label>
				<input type="text" id="car-model" name="car-model" value="<?php echo $row["car_model"]; ?>">
				<label for="car-color">Car Colcor</label>
				<input type="text" id="car-color" name="car-color" value="<?php echo $row["car_color"]; ?>" >  
			</fieldset>
			</td>
			<!-- Documents-1 -->
			<td>
			<fieldset>
				<legend>Documents 1 / 2</legend>
				<label for="profile-pic">Profile Photo</label>
				<img src="" id="profile-pic" name="profile-pic" width=150px; height=150px;>
				<input type="file" id="profile-pic-path" name="profile-pic-path"  hidden>
				<label for="DL-pic">Driving-Licence</label>
				<img src="" id="DL-pic" name="DL-pic" width=150px; height=150px;>
				<input type="file" id="DL-pic-path" name="DL-pic-path"  hidden>
			</fieldset>
			</td>
			<!-- Documents-2 -->
			<td>
			<fieldset>
				<legend>Documents 2 / 2</legend>
				<label for="rc-pic">RC Book</label>
				<img src="" id="rc-pic" name="rc-pic" width=150px; height=150px;>
				<input type="file" id="rc-pic-path" name="rc-pic-path"  hidden>
				<label for="aadhar-pic">Aadhar Card</label>
				<img src="" id="aadhar-pic" name="aadhar-pic" width=150px; height=150px;>
				<input type="file" id="aadhar-pic-path" name="aadhar-pic-path"  hidden>
			</fieldset>
			</td>

		</tr>
		<tr>
			<td align="center" colspan=4>
			        <button id=smtBtn >Update</button>
			</td>
		</tr>
   
</table>
 </div>
</div>

<script>
		
$('#smtBtn').click(function()
{
	var user_name=$('#user-name').val();
	var first_name=$('#first-name').val();
	var last_name=$('#last-name').val();
	var dob=$('#dob').val();
	var gender=$('#gender').val();
	var contact_no=$('#contact_no').val();
	var dl_no=$('#dl-no').val();
	var rc_no=$('#rc-no').val();
	var Aadhar_no=$('#Aadhar_no').val();
	var car_company=$('#car_company').val();
	var car_model=$('#car-model').val();
	var car_color=$('#car-color').val();

	$("#smtBtn").html("Wait");
	$.post("upd_Profile.php", {
		user_name:user_name,
		first_name:first_name,
		last_name:last_name,
		dob:dob,
		gender:gender,
		contact_no:contact_no,
		dl_no:dl_no,
		rc_no:rc_no,
		Aadhar_no:Aadhar_no,
		car_company:car_company,
		car_model:car_model,
		car_color:car_color
	}, function(data) {
		alert(data);
		$("#smtBtn").html("Update");	
	});
});
</script>
<?php
}
$conn->close();
?>

