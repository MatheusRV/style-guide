$(document).ready(function(){
    $('.list-group-item').click(function(event) {
    	$('.active').removeClass('active');
    	$(event.target).addClass('active');

    });
});