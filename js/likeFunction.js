$('body').on('click', '.lv', function(event) {
	var $this = $(this);

	event.preventDefault();

	$.ajax('likes.php?id=' + $this.data('id')).done(function(data) {
		if (data === "LIKED") {
			$this.addClass('fa-heart').removeClass('fa-heart-o');
		} else if (data === "UNLIKED") {
			$this.removeClass('fa-heart').addClass('fa-heart-o');
		}
	}).fail(function(error) {
		if (error.status === 401) {
			// Not signed in
			window.location = 'registeruser.php?return_url=' + encodeURIComponent(window.location.pathname + window.location.search);
		} else {
			alert('Sorry, it didn\'t work');
		}
	});
});