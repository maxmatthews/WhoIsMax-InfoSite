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
			<iframe
				id="googleMap"
				frameborder="0"
				src="https://www.google.com/maps/d/u/0/embed?mid=1fjbClGLQtbEH34aQdM6ajs4Lidg">
			</iframe>
			<h1 id="noiFrame">Your browser does not support iFrames (and therefore not this map) or the iFrame is just loading</h1>
			<h1>"Man cannot discover new oceans unless he has the courage to lose sight of the shore."</h1>
			<h2>-André Gide</h2>
			<h3><a href="/map.php">Switch To Previous Travel Map</a></h3>
		</div>
	</div>
	<?php include 'links.php'; ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
	$('#googleMap').on('load', function(){
		$('#noiFrame').css("display", "none");
	});
</script>

</body>

</html>