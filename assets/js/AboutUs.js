var mymap = L.map('mapid').setView([18.99066, 73.12701], 16);
		var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
         // Adding layer to the map
         mymap.addLayer(layer);
         var marker = L.marker([18.99066, 73.12701]).addTo(mymap);
         var circle = L.circle([18.99066, 73.12701], {
         	color: 'red',
         	fillColor: '#f03',
         	fillOpacity: 0.5,
         	radius: 100
         	}).addTo(mymap);
         marker.bindPopup("<b>TravelSafe</b><br>Head Office").openPopup();
         var popup = L.popup();
         function onMapClick(e) {
         	popup
         	.setLatLng(e.latlng)
        	.setContent("You clicked the map at " + e.latlng.toString())
        	.openOn(mymap);
        }
		mymap.on('click', onMapClick);
