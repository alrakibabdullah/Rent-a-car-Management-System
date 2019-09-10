<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div id="map" style="height: 400px; width: 100%;"></div>
<script type="text/javascript">
function myMap(){
	  var mapCanvas = document.getElementById("map");
	  var mapOptions = {
	  	  center: new google.maps.LatLng(51.5, -0.2),
	  	  zoom: 10
	  };
	 var map = new google.maps.Map(mapCanvas, mapOption); 
}
</script>
 <script src="http://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>