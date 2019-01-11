//Preloader Timeout
setTimeout(function () {
	$('.preloader').fadeOut();
	$('#loader').delay(150).fadeOut('slow');
}, 1000);


$('#second').hide();

$('#signup').click(function () {
	$('#first').fadeOut('fast', function () {
		$('#second').fadeIn('fast');
	});
});

$('#signin').click(function () {
	$('#second').fadeOut('fast', function () {
		$('#first').fadeIn('fast');
	});
});
