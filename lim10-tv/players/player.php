<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Pretty CheckBox -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">

	<!--<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	-->

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- PLAYER -->
	<script src="plyr.js"></script>
	<script src="plyr.polyfilled.js"></script>
	<link rel="stylesheet" type="text/css" href="plyr.css">


	<link rel="shortcut icon"  href="../images/mainlogo.png"/>
	<title>Player Tests</title>
</head>
<body>
	<style type="text/css">
		.owl-item.tested.active {opacity: .3;}
		.carousel-player {width: 100%;}
		.poster-area {position: absolute;z-index: 2;right: 0;left: 0;opacity: 1;transition: all ease .5s;visibility: visible;}
		.poster-area.show {opacity: 0;transition: all ease 2s;visibility: hidden;}
		.current-time {position: absolute;top: 0;left: 0;right: 0;border-top: 4px solid orange;z-index: 99;width: 0%;}
		.buton-area {position: absolute;right: 0;bottom: 4px;z-index: 3;width: 35px;opacity: 0;transition: all ease .5s;visibility: hidden;}
		.buton-area button {border: 2px solid white;background: none;width: 31px;margin-top: 5px;border-radius: 30px;height: 31px;font-size: 12px;cursor: pointer;color:white;font-weight: bold;}
		.buton-area button:hover {border: 2px solid orange;color: orange;}
		.buton-area.active {visibility: visible;opacity: 1;transition: all ease 2s;}
	</style>
	<section class="slider-video mt-5 pt-5">
		<div class="container-fluid p-5" style="height: 75vh;display: flex;align-items: center;">
			<div class="owl-carousel owl-theme owl-carouselvideos">
				<div class="item">
					<div class="buton-area">
						<button class="sound">SS</button>
						<button class="favorite">FV</button>
					</div>
					<div class="poster-area">
						<img src="https://fakeimg.pl/440x250/">
					</div>
					<video class="carousel-player">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
					</video>
					<div class="current-time"></div>
				</div>

				<div class="item">
					<div class="poster-area">
						<img src="https://fakeimg.pl/440x250/">
					</div>
					<video class="carousel-player">

						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
					</video>
					<div class="current-time"></div>
				</div>

				<div class="item">
					<div class="poster-area">
						<img src="https://fakeimg.pl/440x250/">
					</div>
					<video class="carousel-player">

						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
					</video>
					<div class="current-time"></div>
				</div>

				<div class="item">
					<div class="poster-area">
						<img src="https://fakeimg.pl/440x250/">
					</div>
					<video class="carousel-player">

						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
					</video>
					<div class="current-time"></div>
				</div>

				<div class="item">
					<div class="poster-area">
						<img src="https://fakeimg.pl/440x250/">
					</div>
					<video class="carousel-player">

						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720"/>
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080"/>
					</video>
					<div class="current-time"></div>
				</div>

			</div>
		</div>
	</section>


	<script>




		$(document).ready(function() {
			var	carouselVideos = $('.owl-carouselvideos').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				loop:true,
				rewind:true,
				autoWidth:false,
				margin:15,
				dots:false,
				nav:true,
				freeDrag:false,
				pulldrag:false,
				mouseDrag:false,
				navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:4
					}
				}
			});


			$(function(){

				const otherVideos = Plyr.setup('.carousel-player', {
					controls: false, clickToPlay: false, debug: false,showPosterOnEnd: true,
				});

				window.otherVideos = otherVideos;

			});

			$('.owl-homelimon .owl-item').hover(function() {
				//mouse over function				
				$(this).find('.buton-area').addClass('active');
				$(this).find('.poster-area').addClass('show');
				video = $(this).find('video').get(0);
				progress = $(this).find('.current-time');
				carouselvideoplaytime = setTimeout(function(){
					video.play();
				}, 700);
				video.addEventListener('timeupdate', carouselVideosCt, false);

			}, function() {
				//mouse leave function .. 
				$(this).find('.buton-area').removeClass('active');
				$(this).find('.poster-area').removeClass('show');
				var video = $(this).find('video').get(0); 
				clearTimeout(carouselvideoplaytime);
				video.pause();

			});


			$('.owl-carousel').find('div.active').eq(0).addClass('first');
			$('.owl-carousel').find('div.active').eq(3).addClass('last');

			carouselVideos.on('changed.owl.carousel', function() {
				$('div.active').removeClass('first');
				$('div.active').removeClass('last'); 
				setTimeout(function(){
					$('.owl-carousel').find('div.active').eq(0).addClass('first');
					$('.owl-carousel').find('div.active').eq(3).addClass('last');
				}, 200);
			});

		});

		function carouselVideosCt(){
			var progressBar = progress;
			var percentage = (100 / video.duration) *
			video.currentTime;
			progressBar.value = percentage;
			$(progress).css('width',percentage + '%');

		}



	</script>
</body>
</html>
