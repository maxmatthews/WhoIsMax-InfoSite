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
			<iframe
				id="googleMap"
				frameborder="0"
				src="https://www.google.com/maps/d/u/0/embed?mid=1PxD6RDiFtycSQMjPzUlFOJrme_k&z=4&ll=39.5,-98.35"></iframe>
			<h1>"Man cannot discover new oceans unless he has the courage to lose sight of the shore."</h1>
			<h2>-André Gide</h2>
		</div>
	</div>
	<?php include 'links.php'; ?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>