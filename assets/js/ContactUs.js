   // Creating map options
   var mapOptions = {
    center: [18.9902, 73.1277],
    zoom: 18
 }
 // Creating a map object
 var map = new L.map('map', mapOptions);
 
 // Creating a Layer object
 var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
 
 // Adding layer to the map
 map.addLayer(layer);

 var marker = L.marker([18.9902, 73.1277]).addTo(map);
 marker.bindPopup("TravelSafe Headquarters").openPopup();