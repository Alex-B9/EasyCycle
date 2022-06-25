let map = L.map('map').setView([50.60171147516187, 3.5107970237731934], 17);
let x = document.querySelector(".x")

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom:100,
    attribution: '© OpenStreetMap'
}).addTo(map);

let polygon = L.polygon([
    [50.60193959861995, 3.509198427200317],
    [50.600931761262146,3.511274456977844],
    [50.60174211867578,3.5127174854278564],
    [50.6020145045889,3.5117894411087036],
    [50.60207919601159,3.510727286338806],
    [50.60239584221863,3.509917259216308],
    [50.60193959861995,3.509198427200317]
]).addTo(map);


//  User's locacation

let getLocation = ()  => {
    if (navigator.geolocation) navigator.geolocation.getCurrentPosition(showPosition)
    else x.innerHTML = "Geolocation is not supported by this browser.";
}

let showPosition = (position)  => {
    x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude
    L.marker([position.coords.latitude,  position.coords.longitude]).addTo(map);
}

setInterval(() => {
    getLocation()
},1000)



