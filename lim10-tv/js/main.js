var owlSlider;
var carouselVideos;
var activeVideo;
var video;
var videoCr;
var poster;
var progress;
$(document).ready(function(){
	activeVideo = $('section.home-slider .active').find('video').get(0);
	owlSlider = $('.owl-homeslider').owlCarousel({
		mouseDrag:false,
		freeDrag:false,
		pulldrag:false,
		autoplay:false,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop:true,
		margin:0,
		dots:true,
		nav:false,
		navText: ['<i class="far fa-caret-square-left"></i>','<i class="far fa-caret-square-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	
	carouselVideos = $('.owl-homelimon').owlCarousel({
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

	$('.owl-special').owlCarousel({
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop:true,
		autoWidth:false,
		margin:30,
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

	$('.owl-menufilm').owlCarousel({
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		autoplay:true,
		loop:true,
		margin:10,
		dots:false,
		freeDrag:false,
		pulldrag:false,
		autoplayTimeout:2800,
		autoplayHoverPause:true,
		stagePadding:90,
		nav:true,
		navText: ['<i class="fas fa-arrow-left"></i>','<img src="images/next.svg">'],
		responsive:{
			0:{
				items:2
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	});

	owlSlider.on('changed.owl.carousel', function() {

		setTimeout(currentTimeDestroy, 220);
		$('section.home-slider .poster-area').fadeIn(400);

		$.each(sliderVideos, function(index , allVideos) {
			allVideos.pause();
		});

		setTimeout(activeVideoStart, 2000);
		$('button.sl-controls').fadeOut(300);
		$('button.undo').fadeOut();
	});

	carouselVideos.on('changed.owl.carousel', function() {
		$('div.active').removeClass('first'); 
		$('div.active').removeClass('last');

		setTimeout(function(){
			$('.owl-homelimon.sizinicin').find('div.active').eq(0).addClass('first');
			$('.owl-homelimon.sizinicin').find('div.active').eq(3).addClass('last');
			$('.owl-homelimon.diziler').find('div.active').eq(0).addClass('first');
			$('.owl-homelimon.diziler').find('div.active').eq(3).addClass('last');
			$('.owl-homelimon.filmler').find('div.active').eq(0).addClass('first');
			$('.owl-homelimon.filmler').find('div.active').eq(3).addClass('last');
		}, 200);
	});



	$('.crBack').click(function() {
		$(this).fadeOut(300);
		var videoCr = $('.owl-item.onHover').find('video').get(0);
		videoCr.currentTime = 1;
		videoCr.play();
		crPoster.addClass('cr-poster');
	});


	$('.volume').click(function() {
		activeVideo.muted = !activeVideo.muted;
		$('.volume i').toggleClass('fa-volume-mute fa-volume-up');
	});

	$('button.undo').click(function() {
		resetVideo = $('.active').find('video').get(0);
		resetVideo.pause();
		resetVideo.currentTime = 0;
		setTimeout(activeVideoStart, 2000);
	});



	$('.owl-homelimon.sizinicin').find('div.active').eq(0).addClass('first');
	$('.owl-homelimon.sizinicin').find('div.active').eq(3).addClass('last');
	$('.owl-homelimon.diziler').find('div.active').eq(0).addClass('first');
	$('.owl-homelimon.diziler').find('div.active').eq(3).addClass('last');
	$('.owl-homelimon.filmler').find('div.active').eq(0).addClass('first');
	$('.owl-homelimon.filmler').find('div.active').eq(3).addClass('last');

	$('.owl-homelimon .owl-item').hover(function() {
		//mouse over function
		divThis = $(this);
		videoCr = $(this).find('video').get(0);
		progressCr = $(this).find('.current-time');
		undoButton = $(this).find('.crBack');
		crPoster = $(this).find('.poster-area');

		videoCr.addEventListener('timeupdate', crVideosUndoButton, false);
		$(undoButton).fadeOut(300);
		carouselvideoplaytime = setTimeout(function(){
			crPoster.addClass('cr-poster');
			videoCr.play();
			$(divThis).addClass('onHover');
			activeVideo.pause();
		}, 700);

	}, function() {
		//mouse leave function .. 
		$(divThis).removeClass('onHover');
		var videoCr = $(this).find('video').get(0); 
		clearTimeout(carouselvideoplaytime);
		videoCr.pause();
		activeVideo = $('section.home-slider .active').find('video').get(0);

		activeVideo.play();

		crPoster.removeClass('cr-poster');

	});

	$('button.sound').click(function() {
		videoCr.muted = !videoCr.muted;
		$(this).find('i').toggleClass('fa-volume-mute fa-volume-up');
	});

});


$(function(){

	const sliderVideos = Plyr.setup('.slider-player', {
		controls: false, clickToPlay: false, debug: false,showPosterOnEnd: true,muted:true,
	});
	const otherVideos = Plyr.setup('.carousel-player', {
		controls: false, clickToPlay: false, debug: false,showPosterOnEnd: true,muted:true,
	});

	window.sliderVideos = sliderVideos;
	window.otherVideos = otherVideos;

	setTimeout(activeVideoStart, 3000);
	$('button.sl-controls').fadeOut();

});


function crVideosUndoButton(){
	if (videoCr.currentTime > videoCr.duration / 100 * 100 - 2) {
		$(undoButton).fadeIn(500);
		crPoster.removeClass('cr-poster');
	}
}


function nextCarouseled(){
	owlSlider.trigger('next.owl.carousel');
	$('section.home-slider .poster-area').fadeIn(1000);
	$('button.sl-controls').fadeOut(300);
}

function undobuttonback(){
	var undoShow = activeVideo.duration - 6; 
}

function activeVideoStart(){
	activeVideo = $('section.home-slider .active').find('video').get(0);
	$(activeVideo).ready(function(){activeVideo.play();});
	activeVideo.addEventListener('timeupdate', sliderProgress, false);
	progress = $('.slider-countdown');
	activeVideo.addEventListener('ended', nextCarouseled, false);
	$('section.home-slider .poster-area').fadeOut(2000);
	$('button.sl-controls.volume').fadeIn(2000);
}

function sliderProgress() {
	var progressBar = progress;
	var percentage = (100 / activeVideo.duration) *
	activeVideo.currentTime;
	progressBar.value = percentage;
	$(progress).css('width',percentage + '%');

	if (progress.value >= 95) {
		$('button.undo').fadeIn(300);
	}else{
		$('button.undo').fadeOut();
	}
}

function currentTimeDestroy(){
	$('* .slider-countdown').css('width','0%');
}

function posterGetIn(){

	if ( $(window).scrollTop() >= 300 ) {
		console.log('işe yarıyorsun aferin');
	}else {
		console.log('video devam');
	}
}


$(window).scroll(function() {    
	posterGetIn();
});