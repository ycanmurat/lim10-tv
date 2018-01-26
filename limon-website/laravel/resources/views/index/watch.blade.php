<?include("header.php");?>
<section class="altpage-title second watch" style="background-image:url('images/aboutbanner.jpg'); ">
	<h1>Başlığa ne getirmek istersen</h1>
</section>
<!-- Video.js base CSS -->
<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet">

<link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet">

<section class="detail-watch">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-lg-8 col-md-7 col-12">
				<video controls    id="watch-video"
				class="video-js vjs-theme-fantasy"
				controls
				preload="auto"

				poster="images/avlu.jpg"
				data-setup="{}">
				<source src="../lim10/slideravlu.mp4" type="video/mp4"/>
				Tarayıcınız Limon Player'ı desteklemiyor lütfen farklı bir tarayıcıdan deneyiniz.
			</video>

		</div>
		<div class="col-xl-3 col-lg-4 col-md-5 col-12">
			<div class="carousel-area">
				<div class="item">
					<a href="#">
						<div class="image">
							<img src="images/kapak.jpg">
						</div>
						<p>Savaşçı 2. Sezon 14.Bölüm</p>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div class="image">
							<img src="images/kapak.jpg">
						</div>
						<p>Savaşçı 2. Sezon 13. Bölüm</p>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div class="image">
							<img src="images/kapak.jpg">
						</div>
						<p>Savaşçı 2. Sezon 14. Bölüm</p>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div class="image">
							<img src="images/kapak.jpg">
						</div>
						<p>Savaşçı 2. Sezon 15. Bölüm</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<style>
	section.detail-watch div.carousel-area div.item:not(:first-child) {margin-top: 20px;}
	section.detail-watch div.carousel-area div.item a:hover {border: 2px solid #f8d400;color: #f8d400;text-decoration: none;}
	div.vjs-control-bar button {outline: none!important;}
	.vjs-theme-fantasy .vjs-play-progress, .vjs-theme-fantasy .vjs-play-progress:before {background-color: #f8d400;}
	.vjs-theme-fantasy .vjs-play-progress:before {border: 3px solid #70819a;}
	.vjs-theme-fantasy .vjs-big-play-button {color: #f8d400;border: 2px solid #f8d400;border-radius: 100px;}
	span.vjs-icon-placeholder:before {position: absolute;right: 10px;display: flex;align-items: center;justify-content: center;font-size: 3rem;}
	.vjs-theme-fantasy .vjs-volume-panel {order: unset;width: 100px;}
	.video-js .vjs-volume-panel .vjs-volume-control{opacity:1;width: unset;}
	section.detail-watch {position: relative;background: #2c2c2c;padding: 40px 0px;}
	section.detail-watch div.carousel-area {border: 2px solid black;padding: 15px;border-bottom-right-radius: 20px;border-top-left-radius: 20px;max-height: 700px;overflow: auto;}

	section.detail-watch div.carousel-area div.item {padding: 5px;}
	section.detail-watch div.carousel-area div.item a {color: white;font-size: 14px;border: 2px solid #ffffff0f;display: block;transition: all ease .4s;padding: 10px;border-top-left-radius: 10px;border-bottom-right-radius: 10px;}
	section.detail-watch div.carousel-area div.item a img {margin-bottom: 10px;}

	section.detail-watch div.carousel-area::-webkit-scrollbar {width: 5px;height: 2px}
	section.detail-watch div.carousel-area::-webkit-scrollbar-button {width: 0;height: 0}
	section.detail-watch div.carousel-area::-webkit-scrollbar-thumb {background: #f8d400;border: 0 none #2c2c2c;border-top-left-radius: 20px;border-bottom-right-radius: 20px}
	section.detail-watch div.carousel-area::-webkit-scrollbar-thumb:hover {background: #f4f800}
	section.detail-watch div.carousel-area::-webkit-scrollbar-thumb:active {background: #f8b200}
	section.detail-watch div.carousel-area::-webkit-scrollbar-corner {background: transparent}
	section.detail-watch div.carousel-area::-webkit-scrollbar-track {background: transparent;}
	div#watch-video {width: 100%;height: 700px;border: 2px solid black;border-top-right-radius: 20px;border-bottom-left-radius: 20px;overflow: hidden;}
	
	@media only screen and (max-width: 991px) {
		div#watch-video {
			height: 450px;
		}

		section.detail-watch div.carousel-area {
			height: 450px;
		}
	}
</style>
<script src="https://vjs.zencdn.net/7.5.5/video.js"></script>
<?include("footer.php");?>





































