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
	/* Initially, form takes 100% of screen */
       	#Searchbox  
	{
		display: flex;
		position:absolute;
		width: 80%;
		background-color: #f4f4f4;
		justify-content: center; /* Center horizontally */
        	align-items: center;     /* Center vertically */
		padding: 10px 10px 10px 10px ;
		border-radius: 30px;
		overflow-y: auto;
		transition: width 0.5s ease;
		z-index: 1000; /* Make sure the login box is on top of the map */
        }  
        #rides  
	{
		width: 30%;
		background-color: #f4f4f4;
		padding: 20px;
		overflow-y: auto;
		transition: width 0.5s ease;
		visibility: hidden;
		z-index: 1000; /* Make sure the login box is on top of the map */
        }   
        label 
	{
	    margin-right: 10px;
            font-size: 16px;
            color: #333;
        }
        input, select {
            
            padding: 8px 15px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            margin-right: 10px;
            font-size: 16px;
        }         
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
	#Searchbox1
	{
		position:absolute;
		width: 60%;
		background-color: #f4f4f4;
		padding: 0px;
		overflow-y: auto;
		transition: width 0.5s ease;
		z-index: 1000; /* Make sure the login box is on top of the map */
	}   



</style>
<div id="map">
	<div id="Searchbox">
            <form id="carpoolSearchForm" onsubmit="event.preventDefault(); showMapAndSearch();">
                <label for="startLocation">From:</label>
                <input type="text" id="startLocation" placeholder="Enter start city" required oninput="showSuggestions(this.value)">
        	
                <label for="destination">To:</label>
                <input type="text" id="destination" placeholder="Enter destination city" required>
                <label for="Date">On Date:</label>
                <input type="datetime-local" id="travelTime" required>
                <button type="submit">Search Rides</button>
            </form>
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
            const startCity = document.getElementById("startLocation").value;
            const endCity = document.getElementById("destination").value;

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

                        L.marker(start).addTo(map).bindPopup("Start: " + document.getElementById("startLocation").value).openPopup();
                        L.marker(end).addTo(map).bindPopup("Destination: " + document.getElementById("destination").value).openPopup();

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
