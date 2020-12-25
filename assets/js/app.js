$(document).ready(function(){
    const map = L.map('mapid').setView([23.01726, -82.4994812], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([23.0173637, -82.4994378]).addTo(map)
    .bindPopup('<h4>Habana FotoMax</h4>')
    .openPopup();;
});