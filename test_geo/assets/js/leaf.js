//******************** setView pour parametrer la localisation de base, [latitude, Longitude] ********************//

var mymap = L.map('mapid').setView([47.2244424, 5.9838415], 13);




//******************** Initialisation de la map avec ses param ********************//

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets', //Plusieurs param possible sur la doc (.pencil, .satellite...)
    accessToken: 'pk.eyJ1IjoiemRvcmYiLCJhIjoiY2ppNXE0eWF6MGcyMzNrb2V5OXdpbHk1dCJ9.2YnNGdKS8qnk2j2Ojmkwfg'
}).addTo(mymap);






//******************** On ajoute un marqueur à nos coordonnées ********************//

L.marker([47.2244424, 5.9838415]).addTo(mymap)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();





//******************** Maintenant pour ajouter & dessiner des éléments sur la map ********************//

var marker = L.marker([47.2344444, 5.9838415]).addTo(mymap)
// .bindPopup('Coucou, je suis le 2eme marqueur')
// .openPopup();


var circle = L.circle([47.2235510, 5.9948415, 5.9838415], {
    color: 'crimson',
    fillColor: '#f03',
    fillOpacity: '0.5',
    radius: 500
}).addTo(mymap);

//test avec un polygon, plusieurs coordonnées possible

var polygon = L.polygon([
    [47.2244424, 5.9838415],
    [47.2344444, 5.9838415],
    [47.2344440, 5.8838420]
]).addTo(mymap);





//******************** Popup de tel ou tel objet, en cliquant dessus ********************//

marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
circle.bindPopup("I am a circle.");
polygon.bindPopup("I am a polygon.");

// on peux aussi mettre des popup dans des coordonnées, non ratachées à des élements

var popup = L.popup()
    .setLatLng([47.2344424, 5.99594555])
    .setContent("I am a standalone popup.")
    .openOn(mymap);




//******************** Gestion events ********************//
function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}
mymap.on('click', onMapClick);


var layerControl = L.control.layers().addTo(mymap);

L.control.locate = function (options) {

    return new L.Control.Locate(options);
console.log('')
};
