<?php
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<script src='js/jquery-3.4.1.min.js?ver=1'></script>
		<script src='js/bootstrap.min.js?ver=1'></script>
		<script src='js/map-komi.js?ver=1'></script>
	</head>
<body>
	<script>
		$(function() {
			$('.map-komi').mapKomi();
			//$('.map-komi').mapKomi();
		});
	</script>

	<div class="map-komi" id="komi"></div>
	<!--<div class="map-komi" id="komi1"></div>-->
</body>
</html>