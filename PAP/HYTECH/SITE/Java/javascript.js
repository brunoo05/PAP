

var map = L.map('mapid').setView([41.18267715127307, -8.679993017041992], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([41.18267715127307, -8.679993017041992 ]).addTo(map)
    .bindPopup('Estamos aqui.')
    .openPopup();

function facebook(){
        window.open("https://www.facebook.com/profile.php?id=100085856847363&sk=about&section=bio");
    }

function twitter(){
        window.open("https://twitter.com/HytechLoja");
    }

function instagram(){
        window.open("https://www.instagram.com/hytech.loja/");
    }




