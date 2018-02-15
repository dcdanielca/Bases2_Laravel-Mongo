<!DOCTYPE html>
<html>
	<head>
		<title>CENSO</title>
	</head>
	<body onload="getLocation()">
		<h1>Censo</h1>

		<script>

		function getLocation() {
				if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(showPosition);
				} else {
						x.innerHTML = "Geolocation is not supported by this browser.";
				}
		}

		function showPosition(position) {
				document.form.longitud.value = position.coords.longitude;
				document.form.latitud.value = position.coords.latitude;
		}
		</script>
		@yield('contenido')
	</body>
<html>
