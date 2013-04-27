$('.snelcontact-button').click(function() {
      
		if ($(".snelcontact-body").is(":hidden")) {
		$(".snelcontact-body").slideDown("slow");
		} else {
		$(".snelcontact-body").slideUp();
		}
});
