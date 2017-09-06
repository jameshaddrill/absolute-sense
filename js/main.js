 (function($){ // jQuery code here 
 	$(document).ready( function() {
		$('.menu-toggle').click( function() {
			$('.mobile-toggle').toggle();
		});

		$('.home-scroller').click( function() {
			if ($(this).parents('.home-section-container').is(':last-child')) {
				alert('as');
			} else {
				scrollToNext($(this));
			}
			return false;
		});
	});

	function scrollToNext(el) {
		var clickedParent = el.parents('.home-section-container');
		var nextElement = clickedParent.nextAll('.home-section-container:first');
		console.log(nextElement.selector);
		var nextElementPos = nextElement.offset();
		var nextElementTop = nextElementPos.top;
		
		$('html, body').animate({
        	scrollTop: nextElementTop
    	}, 2000);
	}
})(jQuery);


