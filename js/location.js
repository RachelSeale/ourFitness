$(function () {
	var map,
		userLocation,
		infoWindow;

	$('#location-button').on('click', function(e){
		navigator.geolocation.getCurrentPosition(function(position) {
			console.log(position.coords.latitude, position.coords.longitude);

			userLocation = {
				lat: position.coords.latitude,
				lng: position.coords.longitude

			}

			initialize(userLocation);
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
			userLocation = response.results[0].geometry.location;
			initialize(userLocation);
		});

	});

	$('[name="radius"]').on('change', function(){
		initialize(userLocation);
	});

	function createMarker(position, place) {
		var content = '<h1>' + place.name + '</h1>'; 

		if (place.opening_hours && place.opening_hours.open_now) {
			content += '<h1> Open now </h1>';
		}

		content += '<p>' + place.vicinity + '</p>';

	
		var marker = new google.maps.Marker({
		      position: position,
		      map: map,
		      title: place.name  
  		});

  		google.maps.event.addListener(marker, 'click', function() {
  			infoWindow.setContent(content);
		    infoWindow.open(map,marker);
		 });
	}

	function getPlaces (location){
		 var request = {
		    location: location,
		    radius: parseInt($('[name="radius"]:checked').val(), 10) * 1600,
		    types: ['gym']
		  }

		  console.log(request);

		  service = new google.maps.places.PlacesService(map);
		  service.nearbySearch(request, function(results, status){
		  	 if (status == google.maps.places.PlacesServiceStatus.OK) {
    			// console.log(results);
    			results.forEach(function(result){
    				console.log(result);
    				createMarker(result.geometry.location, result);
    			});
 			 }
		  });

		$.ajax({
			url: "js/listOfPlaces.json" 
			}).done(function(places) {
				places.forEach(function(place){
					createMarker(new google.maps.LatLng(place.geometry.location.lat, place.geometry.location.lng), place);
					console.log(place);

				})
			
		});
	}

	function initialize(location) {
        var mapOptions = {
          center: location,
          zoom: 12
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

		var marker = new google.maps.Marker({
		      position: new google.maps.LatLng(location.lat, location.lng),
		      map: map,
		      title: 'user location', 
		      icon: 'images/userMarker.png'
  		});

		infoWindow = new google.maps.InfoWindow();
		getPlaces(location);
      }



});
