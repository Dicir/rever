$(document).ready(function(){
	$('.menu-anchor').onClick('click touchstart', function(e){
		$('html').toggleClass('menu-active');
		e.preventDefault();
	});
});