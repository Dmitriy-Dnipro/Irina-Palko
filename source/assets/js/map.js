function initMap() {
    var myLatLng = {lat: 48.463819, lng: 35.055143};
    var myLatLngKyiv = {lat: 50.426814, lng: 30.534507};
    var map = new google.maps.Map(document.getElementById('mapDnipro'), {
        zoom: 18,
        center: myLatLng
    });
    var map1 = new google.maps.Map(document.getElementById('mapKyiv'), {
        zoom: 18,
        center: myLatLngKyiv
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
    var marker = new google.maps.Marker({
        position: myLatLngKyiv,
        map: map1
    });
}