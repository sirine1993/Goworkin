function onLocationFound(e) {
    var radius = e.accuracy/2;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are here ").openPopup();
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);
map.on('move', function(){
  var zm = map.getZoom();
  var ctr = map.getCenter(); 
  var ll = 'ZOOM:' + zm + ' | MAPCENTER: Lat: '+ ctr['lat'].toFixed(4) + ' Lng: '+ ctr['lng'].toFixed(4) + ' | <span id="recenter">Re-center</span>';
   $('#data').html(ll); 
});

$('#data').on('click', '#recenter',function(){
  map.panTo({lon: map.initlng, lat: map.initlat}, {'animate': true});                  
});
