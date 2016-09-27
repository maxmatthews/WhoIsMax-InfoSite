<!--Are you snooping in my source code? Don't bother, it's a public git repo here:
https://github.com/maxmatthews/WhoIsMax-InfoSite -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head.php'; ?>
</head>

<body id="mapBucketListBody">
<div class="container" id="mapBucketList">
	<div class="row" id="content">
		<div class="text-center">
			<div id="googleMap"></div>
			<h1>"Man cannot discover new oceans unless he has the courage to lose sight of the shore."</h1>
			<h2>-André Gide</h2>
			<h3><a href="/map.php">Switch To Previous Travels Map</a></h3>
		</div>
	</div>
	<?php include 'links.php'; ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('googleMap'), {
			zoom: 2,
			center: {lat: 39.5, lng: -98.35},
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}]
		});

		var ctaLayer = new google.maps.KmlLayer({
			url: 'https://www.google.com/maps/d/u/0/kml?mid=1fjbClGLQtbEH34aQdM6ajs4Lidg&nl=1&cid=mp&cv=59nj2nr9qYo.en.',
			map: map,
			preserveViewport: true
		});
	}
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCPs58lTw57zSl0YWtn-5KulqfiX70zGo&callback=initMap">
</script>

</body>

</html>