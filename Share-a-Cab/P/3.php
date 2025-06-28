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
        input[type="datetime-local"],
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


<div class="centered-div" id=newride >
	<div class="centered-div-content">
		<h1 align="center">Share Your Daily Commuting Cab</h1>
		<input type="hidden" id="user-name" name="user-name" value="<?php echo $un; ?>" required>
		<table border=0>
		<tr>
			<td>
		        <!-- Ride Information -->
		        <fieldset>
				<legend>Ride Information</legend>
				<label for="departure-date">Date and Time of Departure:</label>
				<input type="datetime-local" id="departure-date" name="departure-date" required>
				<label for="starting-location">Starting Location:</label>
				<input type="text" id="starting-location" name="starting-location" required>
				<label for="destination-location">Destination Location:</label>
				<input type="text" id="destination-location" name="destination-location" required>
			</fieldset>
			</td>
		        <!-- Seats and Price -->
		        <td>
			<fieldset>
				<legend>Seats and Points</legend>
				<label for="seats-available">Seats Available:</label>
				<input type="number" id="seats-available" name="seats-available" min="1" required>
				<label for="points-per-passenger">Points per Passenger:</label>
				<input type="number" id="points-per-passenger" name="points-per-passenger" min="0" required>
				<label for="gender-preferences">Gender Preferences:</label>
				<select id="gender-preferences" name="gender-preferences" required>
					<option value="no-preference">No Preference</option>
					<option value="Male Only">Male Only</option>
					<option value="Female Only">Female Only </option>

				</select>
			</fieldset>
			</td>
			<!-- Driver Information -->
			<td>
			<fieldset>
				<legend>Driver Information</legend>
				<label for="driver-name">Driver Name:</label>
				<input type="text" id="driver-name" name="driver-name" value="<?php echo $row["First_Name"]; ?>" required>
				<label for="contact-info">Contact Information:</label>
				<input type="tel" id="contact-info" name="contact-info" value="<?php echo $row["Contact_no"]; ?>" required>
				<label for="License-details">License Details :</label>
				<input type="text" id="License-details" name="License-details" value="<?php echo $row["DL_NO"]; ?>" required>
			</fieldset>
			</td>
			<!-- Car Detail -->
			<td>
			<fieldset>
				<legend>Car Information</legend>
				<label for="car-make">Car Company</label>
				<input type="text" id="car-make" name="car-make"  value="<?php echo $row["car_company"]; ?>" required>
				<label for="car-model">Model:</label>
				<input type="text" id="car-model" name="car-model" value="<?php echo $row["car_model"]; ?>" required>
				<label for="car-rc-details">Car RC Detail ( Registration No:)</label>
				<input type="text" id="car-rc-details" name="car-rc-details" value="<?php echo $row["RC_no"]; ?>" required>
			</fieldset>
			</td>
			<!-- Passenger Requirements -->
			<td>
			<fieldset>
				<legend>Passenger Requirements</legend>
				<label for="smoking-preference">Smoking Preference:</label>
				<select id="smoking-preference" name="smoking-preference" required>
					<option value="no-smoking">No Smoking</option>
					<option value="smoking-allowed">Smoking Allowed</option>
				</select>
				<label for="pets-allowed">Pets Allowed:</label>
				<select id="pets-allowed" name="pets-allowed" required>
					<option value="no-pets">No Pets</option>
					<option value="pets-allowed">Pets Allowed</option>
				</select>
				<label for="music-preferences">Music Preferences:</label>
				<select id="music-preferences" name="music-preferences" required>
					<option value="no-preference">No Preference</option>
					<option value="quiet">Quiet</option>
					<option value="music-allowed">Music Allowed</option>
				</select>
			</fieldset>
			</td>
		</tr>
		<tr>
			<td align="center" colspan=5>
			        <button  id=smtBtn >Publish Ride</button>
			</td>
		</tr>

</table>
 </div>
</div>
<script>
		
$('#smtBtn').click(function()
{
	var user_name=$('#user-name').val();
	var departure_date=$('#departure-date').val();
	var Source=$('#starting-location').val();
	var Destination=$('#destination-location').val();
	var seats=$('#seats-available').val();
	var points=$('#points-per-passenger').val();
	var Gender_pref=$('#gender-preferences').val();
	var driver_name=$('#driver-name').val();
	var contact_info=$('#contact-info').val();
	var License_details=$('#License-details').val();
	var car_make=$('#car-make').val();
	var car_model=$('#car-model').val();
	var car_rc_detail=$('#car-rc-details').val();
	var smoking_preference=$('#smoking-preference').val();
	var pets_allowed=$('#pets-allowed').val();
	var music_preferences=$('#music-preferences').val();


	$("#smtBtn").html("Wait");
	$.post("addRide.php", {
		user_name:user_name,
		departure_date:departure_date,
		Source:Source,
		Destination:Destination,
		seats:seats,
		points:points,
		Gender_pref:Gender_pref,
		driver_name:driver_name,
		contact_info:contact_info,
		License_details:License_details,
		car_make:car_make,
		car_model:car_model,
		car_rc_detail:car_rc_detail,
		smoking_preference:smoking_preference,
		pets_allowed:pets_allowed,
		music_preferences:music_preferences

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
