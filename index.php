<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
<a href="cadastro.php" >cadastro</a>
<a href="login.php" >login</a>


<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNdpzYy_gUiHC8QwCECF-JFRyrtzoaQ3A&callback=myMap"></script>

