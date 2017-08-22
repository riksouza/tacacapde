<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <title>index</title>
    </head>
<a href="cadastro.php" >cadastro</a>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script type="text/javascript">
   

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
    
    
    
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNdpzYy_gUiHC8QwCECF-JFRyrtzoaQ3A&callback=myMap"></script>

