<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
	#map 
	{
		width: 100%;
		height: 100%;
		position: relative;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center; /* Center horizontally */
        	align-items: center;     /* Center vertically */
		width: calc(100% - 20px);
		height: calc(100% - 50px);
		margin: 5px 5px;
		background-color: #fff4f3;
		background-size: 40px 40px;
		border: 1px dotted rgba(216, 63, 30, 0.7);
		outline: 1px dotted rgba(36, 57, 173, 0.7);
		outline-offset: 5px;
        }
        #rides  
	{
		width: 30%;
		background-color: #f4f4f4;
		padding: 20px;
		overflow-y: auto;
		transition: width 0.5s ease;
		visibility: hidden;
		opacity: 0.5;
		z-index: 1000; /* Make sure the login box is on top of the map */
        }   
	#rides:hover
	{
		opacity : 0; transition:opacity 1s;
		opacity: 1;
        }   
        input, select, text 
	{    
            padding: 8px 15px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
        }
        button 
	{
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover 
	{
            background-color: #45a049;
        }
	
	.search-container 
	{
		display: flex;
		position:absolute;
		background-color: #f4f4f4;
		justify-content: center; /* Center horizontally */
       		align-items: center;     /* Center vertically */
		padding: 10px 10px 10px 10px ;
		margin: 10px 10px 10px 10px ;
		border-radius: 10px;
 	   	border: 1px solid #000;
		box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
		z-index: 1000;
	}
	
	.autocomplete-results 
	{
 	   position: absolute;
 	   top: 100%;
 	   left: 0;
 	   right: 0;	
 	  // border: 1px solid #ddd;
	   background-color: #fff;
	   max-height: 200px;
	   overflow-y: auto;
	   z-index: 10;
	}
	.autocomplete-results div 
	{
   		 padding: 10px;
   		 cursor: pointer;
	}
	.autocomplete-results div:hover 
	{
   		 background-color: #f1f1f1;
	}
</style>

<div id="map">
	<div id='search-container' class="search-container">
		<table border=0>
			<tr>
				<td align=center>Start Location	</td>
				<td align=center>End Location</td>
				<td align=center>On Date</td>
				<td> &nbsp;</td>
			</tr>
			<tr>
				<td valign=center>
					<input type="text" id="search-input-1" placeholder="Search..." onkeyup="autocompleteSearch('search-input-1','autocomplete-results-1','20px')" onfocus="autocompleteSearch('search-input-1','autocomplete-results-1','20px' ); document.getElementById('autocomplete-results-2').innerHTML = ''; " >
				</td>
				<td valign=center>	
		        		<input type="text" id="search-input-2"  placeholder="Search..." onkeyup="autocompleteSearch('search-input-2','autocomplete-results-2','255px')" onfocus="autocompleteSearch('search-input-2','autocomplete-results-2','255px' ); document.getElementById('autocomplete-results-1').innerHTML = ''; " >
				</td>
				<td valign=center>	
					<input type="datetime-local" id="travelTime" required>
				</td>

				<td  valign=center>	
			        	<button type="submit" onclick="Search();">Search Rides</button>
				</td>
			</tr>
			<tr height=0>
				<td>				
				        <div id="autocomplete-results-1" class="autocomplete-results"></div>
				</td>
				<td>
					<div id="autocomplete-results-2" class="autocomplete-results"></div>
				</td>
			</tr>
		</table>
	</div>
	<div id="rides">
            <h2>Available rides</h2>
	    <p id="route-info"></p>
        </div>
</div>
<script>
        const apiKey = '5b3ce3597851110001cf62481cd41997f7134517bd16280afd385acc'; // OpenRouteService API Key
        let map; // Declare map globally
        let routeLayer = null;
        let distanceMarker = null;
	function Search()
	{
		// Hide Searchbox and List Rides 
		document.getElementById('search-container').style.visibility= 'hidden';
		document.getElementById('rides').style.visibility= 'visible';	
            	setTimeout(() => {map.invalidateSize(); }, 500);// Fix map resizing issue
            	getRoute();
		

		var source=$('#search-input-1').val();
		var dest=$('#search-input-2').val();
		$.post("listRoutes.php", {
		source:source,
		dest:dest
	
		}, function(data) {
		document.getElementById('rides').innerHTML+=(data);
		});
	}
        function showMapAndSearch() 
	{
		// Hide Searchbox and List Rides 
		document.getElementById('Searchbox').style.visibility= 'hidden';
		document.getElementById('rides').style.visibility= 'visible';	
            	setTimeout(() => {map.invalidateSize(); }, 500);// Fix map resizing issue
            	getRoute();
		a='Anand';


		$.post("listRoutes.php", {
		a:a
		}, function(data) {
		document.getElementById('rides').innerHTML+=(data);
		});
        }
        // Initialize map when page loads
        function initializeMap() {
            map = L.map('map').setView([22.5489464, 72.9035341], 8);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '&copy; OpenStreetMap contributors'}).addTo(map);
        }
        function getCoordinates(city, callback) 
	{
            const url = `https://nominatim.openstreetmap.org/search?format=json&q=${city}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    	if (data.length > 0) 
			{
                        	const lat = data[0].lat;
	                        const lon = data[0].lon;
        	                callback([parseFloat(lat), parseFloat(lon)]);
                	} 
			else 
			{
                        	alert("City not found: " + city);
                    	}
                })
                .catch(error => {
                    console.error("Error fetching coordinates:", error);
                });
        }
        function getRoute() {
            const startCity = document.getElementById("search-input-1").value;
            const endCity = document.getElementById("search-input-2").value;

            if (!startCity || !endCity) {
                alert("Please enter both start and destination cities.");
                return;
            }

            getCoordinates(startCity, startCoords => { 
			getCoordinates(endCity, endCoords => {
                    		drawRoute(startCoords, endCoords);
               		});
        	});
        }

        function drawRoute(start, end) {
            const url = `https://api.openrouteservice.org/v2/directions/driving-car?api_key=${apiKey}&start=${start[1]},${start[0]}&end=${end[1]},${end[0]}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (routeLayer) {
                        map.removeLayer(routeLayer);
                    }
                    if (distanceMarker) {
                        map.removeLayer(distanceMarker);
                    }

                    if (data.features && data.features.length > 0) {
                        const route = data.features[0].geometry.coordinates;
                        const distance = (data.features[0].properties.segments[0].distance / 1000).toFixed(2);
                        const duration = (data.features[0].properties.segments[0].duration / 60).toFixed(2);

                        document.getElementById('route-info').innerText = `Distance: ${distance} km | Duration: ${duration} min`;

                        const latlngs = route.map(coord => [coord[1], coord[0]]);
                        routeLayer = L.polyline(latlngs, { color: 'blue' }).addTo(map);

                        const midIndex = Math.floor(latlngs.length / 2);
                        const midPoint = latlngs[midIndex];

                        distanceMarker = L.marker(midPoint).addTo(map)
                            .bindPopup(`Distance: ${distance} km <br /> Duration: ${duration} min`).openPopup();

                        L.marker(start).addTo(map).bindPopup("Start: " + document.getElementById("search-input-1").value).openPopup();
                        L.marker(end).addTo(map).bindPopup("Destination: " + document.getElementById("search-input-2").value).openPopup();

                        map.fitBounds(routeLayer.getBounds());
                    } 
			else 
			{
                        	alert("No route found.");
                    	}
                })
                .catch(error => {
                    console.error("Error fetching route:", error);
                    alert("Error fetching route data.");
                });
        }

        window.onload = initializeMap; // Initialize map on page load
</script>
<script >
// script.js

// Sample data for search suggestions
var suggestions = ["Ahmedabad","Surat","Vadodara","Baroda","Rajkot","Bhavnagar","Jamnagar","Gandhinagar","Junagadh","Anand","Mehsana","Navsari","Morbi","Bharuch","Vapi","Gandhidham","Patan","Porbandar","Amreli","Surendranagar","Dahod", "Adroda", "Aslali", "Bareja", "Bhat", "Gatrad", "Geratpur", "Ghuma", "Jetalpur", 
            "Kathwada", "Lambha", "Vatva", "Visalpur", "Anandpura", "Chekhla", "Chharodi", 
            "Godhavi", "Iyava", "Bhamsara", "Chiyada", "Dahegamda", "Kanbha", "Sanathal", 
            "Bakrol", "Kubadthal", "Changodar","Abrama", "Bardoli", "Chalthan", "Dabholi", "Gothan", "Kadodara", "Kamrej", "Kapodra", 
"Kosamba", "Mandvi", "Maroli", "Olpad", "Palsana", "Sachin", "Vyara","Asoj", "Bhaili", "Chhani", "Dabhoi", "Fatepura", "Itola", "Karjan", "Koyali", 
"Mujpur", "Nandesari", "Padra", "Por", "Ranoli", "Sankarda", "Vemali","Bedi", "Gondal", "Jasdan", "Jetpur", "Lodhika", "Padadhari", "Pipaliya", "Rajpara", 
"Sardhar", "Shapar", "Upleta", "Vinchhiya", "Kanakpar", "Maliyasan", "Virpur","Alang", "Botad", "Dholera", "Gadhada", "Gariyadhar", "Ghogha", "Jesar", "Mahuva", 
"Palitana", "Sihor", "Talaja", "Trapaj", "Umrala", "Vallabhipur", "Vartej","Bhanvad", "Dhrol", "Jodia", "Kalavad", "Lalpur", "Navagam", "Okha", "Salaya", 
"Sikka", "Vadinar", "Jamjodhpur", "Falla", "Haripar", "Khambhaliya", "Moti Khavdi","Adalaj", "Bhat", "Chandkheda", "Dabhoda", "Giyod", "Jakhora", "Kudasan", "Motera", 
"Pethapur", "Por", "Raysan", "Sargaasan", "Vavol", "Vishnagar", "Zundal", "Bantva", "Bhesan", "Chorwad", "Keshod", "Kodinar", "Malia", "Manavadar", "Mangrol", 
"Mendarda", "Una", "Vanthali", "Visavadar", "Sutrapada", "Talala", "Gir Gadhada","Alindra", "Boriavi", "Dharmaj", "Karamsad", "Khambhat", "Lambhvel", "Mogri", "Napad", 
"Ode", "Petlad", "Samarkha", "Sojitra", "Tarapur", "Umreth", "Vallabh Vidyanagar","Becharaji", "Chansol", "Dedasan", "Ganpatpura", "Jagudan", "Kadi", "Langhnaj", "Mahesana", 
            "Modhera", "Nagvasan", "Panchot", "Rajpur", "Sherisa", "Unjha", "Vadnagar","Amalsad", "Chikhli", "Dandi", "Gandevi", "Jalalpore", "Kachhol", "Khergam", "Maroli", 
            "Mendhar", "Navsari", "Pardi", "Sachin", "Unai", "Vansda", "Vijalpor"];

// Function to handle the autocomplete search
function autocompleteSearch(SI,ACR,L) {
    const input = document.getElementById(SI).value;
    const resultsContainer = document.getElementById(ACR);

    // Clear previous suggestions
    resultsContainer.innerHTML = '';

    // Return if the input is empty
    if (!input) return;

    // Filter suggestions based on input
    const filteredSuggestions = suggestions.filter(item => 
        item.toLowerCase().startsWith(input.toLowerCase())
    );

    // Show the filtered suggestions
    filteredSuggestions.forEach(suggestion => {
        const suggestionDiv = document.createElement("div");
        suggestionDiv.textContent = suggestion;
        suggestionDiv.onclick = function() {
            document.getElementById(SI).value = suggestion;
            resultsContainer.innerHTML = ''; // Clear suggestions when selected
        };
	// top: 52;  left: 320;   width:200;	
	document.getElementById(ACR).style.display = "block"
	document.getElementById(ACR).position = "absolute";
	document.getElementById(ACR).style.top = "79px"; 
	document.getElementById(ACR).style.left = L ;
	document.getElementById(ACR).style.width = "200px"; 
        resultsContainer.appendChild(suggestionDiv);
    });
}
	
</script>