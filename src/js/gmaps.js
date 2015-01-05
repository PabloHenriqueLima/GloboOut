function initialize() {
    var GloboPlace = new google.maps.LatLng(-5.106367, -42.762116);
    var mapOptions = {
        zoom: 17,
        center: GloboPlace
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var marker = new google.maps.Marker({
        position: GloboPlace,
        map: map,
        title: 'Globo Informática'
    });
}
function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
    'callback=initialize';
    document.body.appendChild(script);
}

window.onload = loadScript;
//-5.106367, -42.762116
