function criarMapa()  {
    document.getElementById('mapid').innerHTML = `<div id='map' style='width: 100%; height: 100%;'></div>`;
    var initialCoordinates = [-22.91, -43.20]; // Rio de Janeiro
    var initialZoomLevel = 13;

// create a map in the "map" div, set the view to a given place and zoom
    var map = L.map('mapid').setView(initialCoordinates, initialZoomLevel);

// add an OpenStreetMap tile layer
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; Contribuidores do <a href="http://osm.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
}
criarMapa();