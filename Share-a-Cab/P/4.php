<style>
/* Style the tab */
	.tab 
	{
		overflow: hidden;
		border: 1px solid #9b59b6;
		background-color: #f1f1f1;
	}
	/* Style the buttons inside the tab */
	.tab button 
	{
		background-color: inherit;
		float: left;
		border: 1px solid #9b59b6;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;
	}
	/* Change background color of buttons on hover */
	.tab button:hover 
	{
  		background-color: #9b89b6;
	}
	/* Create an active/current tablink class */
	.tab button.active 
	{
		background-color: #9b59b6;
		color: white;
	}
	/* Style the tab content */
	.tabcontent 
	{
		display: none;
		padding: 6px 12px;
		border: 1px solid #9b59b6;
		border-top: none;
	}
	.grid 
	{
		position: relative;
		border: 1px solid #000;
		padding: 10px 10px 10px 10px ;
		background: #f7c4f7;
		width:96%;
	}
	.grid-container 
	{
		
		overflow-y: auto;
		height: 400px;
		
	}
.styled-table {
	border: 1px solid #440;
    
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
	.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

</style>


<section class="hero1-section">
	<div class="hero1-content">
		<h1>Our Fleet for Airport Taxi </h1>
		<p>Lowest Fare at Airport Taxi in India</p>
		<div>
		<div class="tab"> 
			<button class="tablinks" onclick="openAir(event, 'SVPIA')" id="defaultOpen">Sardar Vallabhbhai Patel Intl Airport </button>
			<button class="tablinks" onclick="openAir(event, 'RIA')">Rajkot Intl Airport </button>
			<button class="tablinks" onclick="openAir(event, 'SIA')">Surat Intl Airport </button>
			<button class="tablinks" onclick="openAir(event, 'VIA')">Vadodara Intl Airport </button>
		</div>
		<div id="SVPIA" class="tabcontent">
			<div class="grid">
				<div class="grid-container" >
				<table class="styled-table">
		                	<thead>
						<tr>
							<th width=50%><div>City</div></th>
							<th width=20%><div> Included kms</div> </th>
							<th width=20%><div>Price</div></th>
							<th width=30%><div>Action</div></th>
						</tr>
					</thead>
			                <tbody>
		                			<tr>
								<td>Ahmedabad</td>
								<td>15km</td>
								<td>265.53</td>
								<td><button class="cta-button" onclick="showAlert()">Book Ride</button></td>
							</tr>
							<tr>
								<td>Surat</td>
								<td>266.7km</td>
								<td>3157</td>
								<td><button class="cta-button" onclick="showAlert()">Book Ride</button></td>
							</tr>
							<tr><td>Vadodara (Baroda)</td><td>119.1km</td><td>1350</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Rajkot</td><td>227.8km</td><td>2525</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Junagadh</td><td>328.2km</td><td>5131</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bhavnagar</td><td>183.8km</td><td>2757</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Jamnagar</td><td>319.1km</td><td>4148</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Anand</td><td>80.9km</td><td>1521</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Mehsana</td><td>75.3km</td><td>1315</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bharuch</td><td>197.2km</td><td>2290</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Navsari</td><td>294.4km</td><td>4040</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Morvi</td><td>221.5km</td><td>3159</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Porbandar</td><td>408.6km</td><td>6411</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr>
								<td>Nadiad</td>
								<td>66.3km</td>
								<td>1187</td>
								<td><button class="cta-button"  onclick="showAlert()>Book Ride</button></td>
							</tr>
							<tr>
								<td>Gandhidham</td>
								<td>299.1km</td>
								<td>4396</td>
								<td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td>
							</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
		<div id="RIA" class="tabcontent">
			<div class="grid">
				<div class="grid-container" >
					<table class="styled-table">
                				<thead>
							<tr>
							<th width=50%><div>City</div></th>
							<th width=20%><div> Included kms</div> </th>
							<th width=20%><div>Price</div></th>
							<th width=30%><div>Action</div></th>
							</tr>
						</thead>
				                <tbody>"
							<tr><td>Ahmedabad</td><td>197.7km</td><td>2407</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Surat</td><td>408.5km</td><td>7271</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Vadodara (Baroda)</td><td>260.3km</td><td>5023</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Rajkot</td><td>28.9km</td><td>558.71</td><td><button class="cta-button"  onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Junagadh</td><td>129.4km</td><td>2571</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bhavnagar</td><td>185.8km</td><td>3072</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Jamnagar</td><td>120.2km</td><td>1425</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Anand</td><td>227.8km</td><td>4282</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Mehsana</td><td>267.6km</td><td>3973</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bharuch</td><td>338.7km</td><td>7378</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Navsari</td><td>435.8km</td><td>7933</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Morvi</td><td>69.4km</td><td>1266</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Porbandar</td><td>209.7km</td><td>4140</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Nadiad</td><td>209.5km</td><td>4467</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Gandhidham</td><td>189.4km</td><td>3545</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div id="SIA" class="tabcontent">
			<div class="grid">
				<div class="grid-container" >
					<table class="styled-table">
                				<thead>
							<tr>
							<th width=50%><div>City</div></th>
							<th width=20%><div> Included kms</div> </th>
							<th width=20%><div>Price</div></th>
							<th width=30%><div>Action</div></th>
							</tr>
						</thead>
						<tbody>
							<tr><td>Ahmedabad</td><td>283.3km</td><td>2929</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Surat</td><td>20km</td><td>357.6</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Vadodara (Baroda)</td><td>164.4km</td><td>2038</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Rajkot</td><td>454.5km</td><td>8096</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Junagadh</td><td>554.9km</td><td>9652</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bhavnagar</td><td>143km</td><td>5228</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Jamnagar</td><td>545.8km</td><td>6858</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Anand</td><td>207.5km</td><td>3529</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Mehsana</td><td>364.1km</td><td>5463</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bharuch</td><td>85.2km</td><td>1565</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Navsari</td><td>41.4km</td><td>1088</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Morvi</td><td>476.9km</td><td>8183</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Porbandar</td><td>635.3km</td><td>8986</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Nadiad</td><td>229.9km</td><td>3553</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Gandhidham</td><td>568.7km</td><td>11084</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
				                </tbody>
			            	</table>
				</div>
			</div>
		</div>
		<div id="VIA" class="tabcontent">
			<div class="grid">
				<div class="grid-container" >
					<table class="styled-table">
                				<thead>
							<tr>
							<th width=50%><div>City</div></th>
							<th width=20%><div> Included kms</div> </th>
							<th width=20%><div>Price</div></th>
							<th width=30%><div>Action</div></th>
						</tr>
						</thead>
						<tbody>
				                	<tr><td>Ahmedabad</td><td>106.4km</td><td>1221</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Surat</td><td>155.8km</td><td>2135</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Vadodara (Baroda)</td><td>6.7km</td><td>160.69</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
					                <tr><td>Rajkot</td><td>283.1km</td><td>4378</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
					                <tr><td>Junagadh</td><td>383.5km</td><td>6111</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bhavnagar</td><td>201.2km</td><td>3428</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Jamnagar</td><td>374.4km</td><td>5195</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Anand</td><td>43.4km</td><td>1147</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Mehsana</td><td>187.2km</td><td>2822</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Bharuch</td><td>88.1km</td><td>1620</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Navsari</td><td>183.2km</td><td>3258</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Morvi</td><td>305.5km</td><td>4980</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Porbandar</td><td>463.9km</td><td>10755</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
					                <tr><td>Nadiad</td><td>60.2km</td><td>1349</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
							<tr><td>Gandhidham</td><td>391.8km</td><td>7404</td><td><button class="cta-button" onclick="showAlert()">Book Ride</button></td></tr>
						</tbody>
					</div>
				</div>
	            	</table>
		</div>
<script>
function showAlert() {
            alert("This facility will be available soon!");
        }

function openAir(evt, Air) 
{
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) 
	{
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) 
	{
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(Air).style.display = "block";
	evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>

	</div>
</section>