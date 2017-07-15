$(function () {
	var images = ['HC-landing_bg1080_fontana.jpg', 'HC-landing_bg1080_ipanema.jpg', 'HC-landing_bg1080_skate.jpg', 'HC-landing_bg1080_mona.jpg'];
	$('#background').css({'background-image': 'url(img/bg/' + images[Math.floor(Math.random() * images.length)] + ')'});
});