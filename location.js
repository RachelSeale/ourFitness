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

	function createMarker(position, title) {
	
		var marker = new google.maps.Marker({
		      position: position,
		      map: map,
		      title: title
  		});
	}

	function initialize(location) {
        var mapOptions = {
          center: location,
          zoom: 12
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

       createMarker(new google.maps.LatLng(location.lat, location.lng));

  		  var request = {
		    location: location,
		    radius: '3200',
		    types: ['gym']
		  };

		  service = new google.maps.places.PlacesService(map);
		  service.nearbySearch(request, function(results, status){
		  	 if (status == google.maps.places.PlacesServiceStatus.OK) {
    			// console.log(results);
    			results.forEach(function(result){
    				console.log(result);
    				createMarker(result.geometry.location, name);
    			});
 			 }
		  });
      }



});
