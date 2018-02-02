<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		window.onload = function() {
			$('.load-items').fadeOut(1000);
			$('body').css('overflow','unset');
		};
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="players/plyr.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/mainlogo.png"/>
	<title>Player Title - Lim10</title>
</head>
<body>
	<style>
		video.detail-player {
			top: 50%;
			position: relative;
			transform: translateY(-50%);
		}

		.plyr__video-wrapper{
			height:100vh;
		}

		button.plyr__control.plyr__control--overlaid.plyr__tab-focus {
			background: orange;
			box-shadow: 0 0 0 5px #ffa5006b;
		}
	</style>
	<div class="load-items">
		<div class="loadingio-spinner-eclipse-bf2elllyjg"><div class="ldio-s8y2ejiv2k">
			<div></div>
		</div></div>
	</div>

	<section class="main-player">
		<video preload="none" class="detail-player" autoplay>
			<source src="videos/bolum/poyrazkarayel.mp4" type="video/mp4"/>

		</video>
	</section>
<<<<<<< HEAD

=======
<div class="controls-button">
	Developer Area
</div>
>>>>>>> Yayın öncesi revize & bugfix

	<script src="players/plyr.js"></script>
	<script src="players/plyr.polyfilled.js"></script>
	<script>


		$(function(){

			const detailPlayer = Plyr.setup('.detail-player', {clickToPlay: true, debug: false,showPosterOnEnd: true,muted:false,
			});
			window.detailPlayer = detailPlayer;

		});
		var timer;
		var hidding = false; 
		$(function () { 
			$('.plyr').mousemove(function () {
				if(hidding){ hidding = false; return; } if (timer) {
					clearTimeout(timer); timer = 0; } $('.plyr__video-wrapper').css({ cursor: 'pointer' });
					timer = setTimeout(function () { hidding = true; $('.plyr__video-wrapper').css({ cursor: 'none' }); 
				}, 2000) }); 
		});

/*
		var $video  = $('video'),
		$window = $(window); 

		$(window).resize(function(){
			var height = $window.height();
			$video.css('height', height);

			var videoWidth = $video.width(),
			windowWidth = $window.width(),
			marginLeftAdjust =   (windowWidth - videoWidth) / 2;

			$video.css({
				'height': height, 
				'marginLeft' : marginLeftAdjust
			});
		}).resize();
		*/
	</script>
</body>
</html>