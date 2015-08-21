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
		  	$('.list-group-princ li:last-child a').parent('.list-group-item').toggleClass('active');
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

	var copyBtn = document.querySelector('#copiar-email');
	if(copyBtn){
		copyBtn.addEventListener('click', function () {
		  var urlField = document.querySelector('#email-exemplo');
		   
		  // create a Range object
		  var range = document.createRange();  
		  // set the Node to select the "range"
		  range.selectNode(urlField);
		  // add the Range to the set of window selections
		  window.getSelection().addRange(range);
		   
		  // execute 'copy', can't 'cut' in this case
		  document.execCommand('copy');
		  window.getSelection().removeAllRanges();
		}, false);
	}

	$(".dropdown-menu li a").click(function(){

      $(".btn:first-child").text($(this).text().concat('  |  ▼'));
      $(".btn:first-child").val($(this).text());

   });
});