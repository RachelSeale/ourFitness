$(function () {
	var map;

	$('#location-button').on('click', function(e){
		navigator.geolocation.getCurrentPosition(function(position) {
			console.log(position.coords.latitude, position.coords.longitude);

			initialize({

				lat: position.coords.latitude,
				lng: position.coords.longitude
			});
		});
	});

	$('#location-form').on('submit', function(e){
		e.preventDefault();
		var searchTerm = $('#location-input').val();
		console.log(searchTerm);

		$.ajax({
			url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + searchTerm
		}).done(function(response) {
			console.log(response.results[0].geometry.location);
			initialize(response.results[0].geometry.location);
		});

	});

	function initialize(location) {
        var mapOptions = {
          center: location,
          zoom: 12
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var myLatlng = new google.maps.LatLng(location.lat, location.lng);
	
		var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Hello World!'
  		});
      }



});
