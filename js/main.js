$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$(".sidebar").toggle(300)

	});
});