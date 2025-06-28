<?php
	$source=$_POST['source'];
	$dest=$_POST['dest'];

	$servername = "118.139.181.71";
	$database = "c12";
	$username = "Khushi";
	$password = "Alpesh@01";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
 		 die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM cab_rides";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		?>
		<table border=1 >
		<thead>
			<tr>
				<th><div>Ride ID</div></th>
				<th><div>From</div></th>
				<th><div>To</div> </th>
				<th><div>Date & Time</div></th>
				<th><div>Car-Detail</div></th>
			</tr>
		</thead>
		<tbody>
		<?php
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			    echo "<tr> <td>" . $row["ride_id"]. " </td> <td> " . $row["source"]. "</td> <td> " . $row["destination"]."</td> <td> " . $row["car_rc_detail"]. " </td> <td> <button>Book Now </button></td></tr>";
		}
		?>
		</tbody>
		</table>
		<?php
	} 
	else 
	{
		  echo "0 results";
	}
	$conn->close();
?>


