<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<title>Google Map In PHP</title>
	</head>
<body class="bg-info">
	<nav class="navbar navbar-default" style="background-color: #0BA9FD">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Google Map For PHP</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well" style="background-color: #0BA9FD">
		<h3 class="text-primary">Display Google Map Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-primary" id="get_map"><span class="glyphicon glyphicon-location"></span> Load Map</button>
		<div id="map" style="height:500px; display:none;"></div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&callback=initMap" async defer></script>	
	<script>
		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 9.5162, lng: 123.158},
				zoom: 8
			});
		}
	</script>
	<script src="js/script.js"></script>
</body>
</html>