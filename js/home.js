$(function () {
	$('#location-button').on('click', function(e){
		navigator.geolocation.getCurrentPosition(function(position) {
			console.log(position.coords.latitude, position.coords.longitude);


			window.location = "map.php?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude;
		});
	});
});