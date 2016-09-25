<!--Are you snooping in my source code? Don't bother, it's a public git repo here:
https://github.com/maxmatthews/WhoIsMax-InfoSite -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head.php'; ?>
</head>

<body id="mapBody">
<div class="container" id="map">
	<div class="row" id="content">
		<div class="text-center">
			<div id="googleMap"></div>
			<h1>"Man cannot discover new oceans unless he has the courage to lose sight of the shore."</h1>
			<h2>-André Gide</h2>
			<h3><a href="/mapBucketList.php">Switch To Bucket List Map</a></h3>
		</div>
	</div>
	<?php include 'links.php'; ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('googleMap'), {
			zoom: 4,
			center: {lat: 39.5, lng: -98.35},
			styles: [{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#1c99ed"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#1f79b5"}]},{"featureType":"administrative.province","elementType":"labels.text.fill","stylers":[{"color":"#6d6d6d"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#555555"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#999999"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#e1eddd"}]},{"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"},{"lightness":"45"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ff9500"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#009aff"},{"saturation":"100"},{"lightness":"5"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"color":"#ff9500"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"lightness":"1"},{"saturation":"100"},{"hue":"#009aff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#8a8a8a"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"lightness":"33"},{"saturation":"-100"},{"visibility":"on"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#4db4f8"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]}]
		});

		var ctaLayer = new google.maps.KmlLayer({
			url: 'https://www.google.com/maps/d/u/0/kml?mid=1PxD6RDiFtycSQMjPzUlFOJrme_k&nl=1&cid=mp&cv=59nj2nr9qYo.en.',
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