<!DOCTYPE html>
<html lang="pt-br">
<head>

        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        

    </head>
    <body>
<a href="cadastro.php" >cadastro</a>
<a href="login.php" >login</a>
<div class="g-signin2" data-onsuccess="onSignIn"></div>




<div id="map" style="width:80%;height:300px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(-1.3440696,-48.4595301);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNdpzYy_gUiHC8QwCECF-JFRyrtzoaQ3A&callback=myMap"></script>

</body>
</html>