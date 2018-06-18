
// ICONE WIFI POINTS //
var geojsonMarkerOptions = {
    radius: 8,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};
// ICONE WIFI POINTS //

var map = L.map('map').setView([47.234415, 5.9238639999999805], 13);
L.tileLayer('https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
	maxZoom: 20
}).addTo(map);

function clearMapV() {
    features = [];
    features.length = 0;
    vectorLayer.destroyFeatures();
    drawValues(); // call function to re-create markers
}


function onLocationFound(e) {
    var radius = e.accuracy / 2;
    var iconeLoc = L.icon({
        iconUrl: "urhere.png",
iconSize: [20, 20]
    });
    
    
    
    L.marker(e.latlng,{icon:iconeLoc}).addTo(map);
    L.circle(e.latlng, radius).addTo(map);
    map.initlat = e.latlng.lat;
    map.initlng = e.latlng.lng;
 
    document.getElementById("lat").value =  e.latlng.lat;
    document.getElementById("long").value =  e.latlng.lng;

}
    
    map.on('locationfound', onLocationFound); 

    
   

    map.on('click', function (e) {
        var container = L.DomUtil.create('div'),
        startBtn = createButton('Start from this location', container),
        destBtn = createButton('Go to this location', container);
        
        L.popup()
        .setContent(container)
        .setLatLng(e.latlng)
        .openOn(map);
        });
        
        map.locate({
        setView: true,
        maxZoom: 15
        });    

fetch('jsonPoints.php')

    .then(function(reponse){
        return reponse.json();
    })
    .then(function(reponse){
        var geojson = {
            "type": "FeatureCollection",
            "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
            "features": reponse
        }
        console.log(reponse);
        console.log(geojson);
        // L.geoJSON(geojson).addTo(map); SI FONCTION COWORK SPOTS // 

        //  Si fonction  WIFI //
        L.geoJSON(geojson, {
            pointToLayer: function (feature, latlng) {
                return L.circleMarker(latlng, geojsonMarkerOptions);
            }
        }).addTo(map);
        // Si fonction  WIFI  //
        
        
    })


    document.querySelector("form").addEventListener("submit", function (e) {
        e.preventDefault();

        pointLayer.removeAllFeatures();
       

        var data = new FormData();
        data.append("lat", lat.value);
        data.append("long", long.value);
        var paramAjax = {
        method: "POST",
        body: data
        };

        fetch("jsonPoints.php", paramAjax).then(function (response) {
            return response.json();


        })
        .then(function(reponse){
        var geojson = {
            "type": "FeatureCollection",
            "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
            "features": reponse
        }
        // console.log(reponse);
        // console.log(geojson);
        // // L.geoJSON(geojson).addTo(map); SI FONCTION COWORK SPOTS // 

        //  Si fonction  WIFI //
        var pointLayer = L.geoJSON(geojson, {
            pointToLayer: function (feature, latlng) {
                return L.circleMarker(latlng, geojsonMarkerOptions);
            }
        }).addTo(map);
       
        // Si fonction  WIFI  //
        
        
    })
    })

   


   



