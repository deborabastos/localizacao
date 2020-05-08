function askGeoSuccess(position) {
      return [position.coords.latitude,position.coords.longitude];
  };
  
  function askGeoFailure()
  {return [-23.61,-46.63]; //RJ
  } 

console.log(navigator.geolocation.getCurrentPosition(askGeoSuccess, askGeoFailure));

function criarMapa()  {
    document.getElementById('mapid').innerHTML = `<div id='map' style='width: 100%; height: 100%;'></div>`;
    var initialCoordinates = [-23.61,-46.63]; // SP
    var initialZoomLevel = 13;

// create a map in the "map" div, set the view to a given place and zoom
    var map = L.map('mapid').setView(initialCoordinates, initialZoomLevel);

// add an OpenStreetMap tile layer
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; Contribuidores do <a href="http://osm.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var patinhaIcon = L.icon({
        iconUrl: 'https://png2.cleanpng.com/sh/abbf55dac68892ec99c9af7150b6f725/L0KzQYm3VcMxN5twg5H0aYP2gLBuTfRwb15oeeY2cHH6PbTzigAuaaN5RadrMHa1Rom7VfQ5PZU3Rqg6OEG6RYS4UcUzP2g2UacANkO7Q4K1kP5o/kisspng-dog-cat-paw-clip-art-5b0f26845d85d2.6181753115277195563831.png',    
        iconSize:     [30,30], // size of the icon
    });

// botar markers
    var marker = L.marker([-23.61,-46.63], {icon: patinhaIcon}).addTo(map);
    marker.bindPopup("Primeiro.").openPopup();
    var marker = L.marker([-23.62,-46.63], {icon: patinhaIcon}).addTo(map);
    marker.bindPopup("Segundo").openPopup();
    var marker = L.marker([-23.61,-46.43], {icon: patinhaIcon}).addTo(map);
    marker.bindPopup("Terceiro").openPopup();
}

criarMapa();
