$('.snelcontact-button').click(function() {
      
		if ($(".snelcontact-body").is(":hidden")) {
		$(".snelcontact-body").slideDown("slow");
		} else {
		$(".snelcontact-body").slideUp();
		}
});

$('.snelcontact-button').mouseover(function() {
	$(this).css("color", "#DDD");
}) 

$('.snelcontact-button').mouseout(function() {
	$(this).css("color", "#071a36");
}) 