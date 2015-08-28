$(document).ready(function(){
	var color_op;
	var nav = $('nav'),
		nav_height = nav.outerHeight(),
		sections = $('section');


	if($(window).width() > 767){
		if ($(window).scrollTop() < $('#jumbotron').offset().top + $('#jumbotron').outerHeight(true) - $('#navbar').outerHeight(true) - 5) {
			$('#sidebar').css('top',($('#jumbotron').offset().top + $('#jumbotron').outerHeight(true) - $(window).scrollTop()));
			
		} else {
		    $('#sidebar').css('top',$('#navbar').outerHeight(true) + 5);
		}
	}
		else{
			$('#sidebar').css('top',0);
		}

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
		if($(window).width() > 767){
			if ($(window).scrollTop() < $('#jumbotron').offset().top + $('#jumbotron').outerHeight(true) - $('#navbar').outerHeight(true) - 5) {
				$('#sidebar').css('top',($('#jumbotron').offset().top + $('#jumbotron').outerHeight(true) - $(window).scrollTop()));
				
			} else {
			    $('#sidebar').css('top',$('#navbar').outerHeight(true) + 5);
			}
		}
		else{
			$('#sidebar').css('top',0);
		}
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

	function copyTextToClipboard(text) {
	  var textArea = document.createElement("textarea");
	  textArea.style.position = 'fixed';
	  textArea.style.top = 0;
	  textArea.style.left = 0;
	  textArea.style.width = '2em';
	  textArea.style.height = '2em';
	  textArea.style.padding = 0;
	  textArea.style.border = 'none';
	  textArea.style.outline = 'none';
	  textArea.style.boxShadow = 'none';
	  textArea.style.background = 'transparent';
	  textArea.value = text;
	  document.body.appendChild(textArea);
	  textArea.select();

	  document.execCommand('copy');
	  document.body.removeChild(textArea);
	}

	$(".dropdown-menu li a").click(function(event){
		event.preventDefault();
      $(".btn:first-child").text($(this).text().concat('  |  ▼'));
      $(".btn:first-child").val($(this).text());
      color_op = $(".btn:first-child").val();
      if(color_op == "RGB"){
      	$("#p-azul-rock").text("66/102/174");
      	$("#p-cinza-rock").text("100/96/95");
      	$("#p-verde-rock").text("78/161/133");
      	$("#p-laranja-rock").text("234/85/80");
      	$("#p-amarelo-rock").text("241/196/15");
      	$("#p-roxo-rock").text("134/59/86");
      	$("#p-branco-rock").text("239/240/240");
      }
      else if(color_op == "CMYK"){
      	$("#p-azul-rock").text("80/59/0/0");
      	$("#p-cinza-rock").text("62/54/53/26");
      	$("#p-verde-rock").text("70/15/56/1");
      	$("#p-laranja-rock").text("0/78/63/0");
      	$("#p-amarelo-rock").text("7/22/94/0");
      	$("#p-roxo-rock").text("36/81/37/32");
      	$("#p-branco-rock").text("8/5/6/0");      	
      }
      else if(color_op == "HEXA (#)"){      	
      	$("#p-azul-rock").text("#4967A9");
      	$("#p-cinza-rock").text("#5F625F");
      	$("#p-verde-rock").text("#4EA185");
      	$("#p-laranja-rock").text("#EA5550");
      	$("#p-amarelo-rock").text("#F1C40F");
      	$("#p-roxo-rock").text("#863B56");
      	$("#p-branco-rock").text("#EFF0F0");  
      }
   });
	$("#azul-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-azul-rock").text());
	});
	$("#cinza-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-cinza-rock").text());
	});
	$("#verde-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-verde-rock").text());
	});
	$("#laranja-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-laranja-rock").text());
	});
	$("#amarelo-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-amarelo-rock").text());
	});
	$("#roxo-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-roxo-rock").text());
	});
	$("#branco-rock").click(function(event) {
		event.preventDefault();
		copyTextToClipboard($("#p-branco-rock").text());
	});

});