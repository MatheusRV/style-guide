$(document).ready(function(){
	var nav = $('nav'),
		nav_height = nav.outerHeight(),
		sections = $('section');

    $('.list-group-item').click(function(event) {
    	var id = $(event.target).attr('href'); 
		$('html, body').animate({
		scrollTop: $(id).offset().top - nav_height
		}, 500, function(){
			$('.list-group-item.active').toggleClass('active');
			$('.parent-list-group:not(.active)').find('.sublist-group').css("display", "none");
    		$(event.target).parent('.list-group-item').toggleClass('active');
    		// Sublista nivel 1
		  	$(event.target).parent('.list-group-item').parent('.list-group').parent('.parent-list-group').toggleClass('active');
		  	// Sublista nivel 2
		  	// $(event.target).parent('.list-group-item').parent('.list-group').parent('.parent-list-group').parent('.list-group').parent('.parent-list-group').addClass('active');
		  	$('.parent-list-group.active').find('.sublist-group:first').css("display", "block");
		});
		return false;
    });
	 
	$(window).on('scroll', function () {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			$('.list-group-item.active').toggleClass('active');
		  	$('a[href="#concluindo"]').parent('.list-group-item').toggleClass('active');
		}
		else{
			var cur_pos = $(this).scrollTop();
			sections.each(function() {
				var top = $(this).offset().top - nav_height,
				    bottom = top + $(this).outerHeight();

				if (cur_pos >= top && cur_pos <= bottom) {
					$('.list-group-item.active').toggleClass('active');
					$('.parent-list-group:not(.active)').find('.sublist-group').css("display", "none");
				  	$('a[href="#'+$(this).attr('id')+'"]').parent('.list-group-item').toggleClass('active');
				  	// Sublista nivel 1
				  	$('a[href="#'+$(this).attr('id')+'"]').parent('.list-group-item').parent('.list-group').parent('.parent-list-group').addClass('active');
				  	// Sublista nivel 2
				  	// $('a[href="#'+$(this).attr('id')+'"]').parent('.list-group-item').parent('.list-group').parent('.parent-list-group').parent('.list-group').parent('.parent-list-group').addClass('active');
				  	$('.parent-list-group.active').find('.sublist-group:first').css("display", "block");
				}
			});
		}
	});
});