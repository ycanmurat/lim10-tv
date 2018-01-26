@extends('layouts.index.master')
@section('page-header')

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Anasayfa</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>


    </div>

@endsection
@section('icerik')
<div class="owl-carousel owl-theme owl-slider">
	<div class="item">
		<div class="desktop-image" style="background-image: url('images/savascislider.jpg');"></div>
		<div class="mobile-image">
			<img src="images/savascimobile.jpg">
		</div>
	</div>
	<div class="item">
		<div class="desktop-image" style="background-image: url('images/karaekmekslider.jpg');"></div>

		<div class="mobile-image">
			<img src="images/karaekmekmobile.jpg">
		</div>
	</div>
	<div class="item">
		<div class="desktop-image" style="background-image: url('images/poyrazslider.jpg');"></div>
		
		<div class="mobile-image">
			<img src="images/poyrazkarayelmobile.jpg">
		</div>

		<!--
		<section class="slider" style="background-image: url('images/poyrazslider.jpg');">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1>POYRAZ KARAYEL, 2. SEZON</h1>
						<h2 class="timer count-title count-number" data-to="9" data-speed="800" style="width: 97px;"></h2>
						<h2 class="count-title">ŞUBAT</h2>
						<h2 class="timer count-title count-number" data-to="2020" data-speed="800"></h2>
						<h1>'de YAYINDA</h1>

					</div>
				</div>
			</div>

			<div class="channel-area">
				<span style="color:#0A7FC4!important">YENİ SEZON</span>
				<h2 style="color:#0A7FC4!important;">Pazartesi 20:00</h2>
				<img style="width: 150px;margin: auto;" src="images/kanald.png">
			</div>
			<div class="dizi-logo">
				<img src="images/poyrazkarayel.png">
			</div>
			<div class="diagonals">
				<svg class="diagonal-left" viewBox="0 0 100 102" preserveAspectRatio="none">
					<path d="M0 100 L100 100 L0 10 Z"></path>
				</svg>
				<svg class="diagonal-right" viewBox="0 0 100 95" preserveAspectRatio="none">
					<path d="M0 100 L100 100 L100 10 Z"></path>
					</svg>
				-->
			</div>
		</section>
	</div>
</div>
<section class="new-videos" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">{{trans('site.yeni-fragmanlar')}}</h1>
				<div class="owl-carousel owl-theme owl-newvideos">
					<div class="item">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#fragman-Modals">
							<img src="images/kapak.jpg">
							<div class="text-area">
								<p>Lorem ipsum dolor sit amet</p>
								<p>{{trans('site.yorumlar-kapali')}}</p>
								<b>29 OCAK 2024</b>
							</div>
						</a>
					</div>

					<div class="item">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#fragman-Modals">
							<img src="images/kapak.jpg">
							<div class="text-area">
								<p>Lorem ipsum dolor sit amet</p>
								<p>Yorumlar Kapalı</p>
								<b>29 OCAK 2024</b>
							</div>
						</a>
					</div>

					<div class="item">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#fragman-Modals">
							<img src="images/kapak.jpg">
							<div class="text-area">
								<p>Lorem ipsum dolor sit amet</p>
								<p>Yorumlar Kapalı</p>
								<b>29 OCAK 2024</b>
							</div>
						</a>
					</div>

					<div class="item">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#fragman-Modals">
							<img src="images/kapak.jpg">
							<div class="text-area">
								<p>Lorem ipsum dolor sit amet</p>
								<p>Yorumlar Kapalı</p>
								<b>29 OCAK 2024</b>
							</div>
						</a>
					</div>

					<div class="item">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#fragman-Modals">
							<img src="images/kapak.jpg">
							<div class="text-area">
								<p>Lorem ipsum dolor sit amet</p>
								<p>Yorumlar Kapalı</p>
								<b>29 OCAK 2024</b>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="news">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title second">{{trans('site.haberler')}}</h1>

				<div class="owl-carousel owl-theme owl-news">
					<div class="item">
						<div class="image-area">
							<img class="img-fluid" src="images/indexhaber.jpg">
						</div>
						<div class="wrapper">
							<h4>Yıldız Çağrı atiksoy, "Savaşçı" ile ekranlara dönüyor !..</h4>
							<div class="text-area">
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
							</div>
							<a href="#">{{trans('site.devamini-oku')}}</a>
						</div>
					</div>
					<div class="item">
						<div class="image-area">
							<img class="img-fluid" src="images/indexhaber.jpg">
						</div>
						<div class="wrapper">
							<h4>Haber Başlığı burada yer alacak Epeyce uzun gelebilir yine de sıkıntı çıkarmaz.</h4>
							<div class="text-area">
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
							</div>
							<a href="#">Devamını Oku</a>
						</div>
					</div>
					<div class="item">
						<div class="image-area">
							<img class="img-fluid" src="images/indexhaber.jpg">
						</div>
						<div class="wrapper">
							<h4>Haber Başlığı burada yer alacak Epeyce uzun gelebilir yine de sıkıntı çıkarmaz.</h4>
							<div class="text-area">
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
								<p>Sevilen oyuncu Yıldız çağrı atiksoy, Limon Filmin yapımcılığında gerçekleşen, başrollerini berk oktay, murat serezli , bur kümbetliığlu, fırat albayram, uğur biçer, hakan dinçkol, bahadır vatanoğlu alican albayrak ve doğan bayraktar ile paylaştığı fox'un merakla beklenen dizisi "Savaşçı" ile ekranlara geri dönüyor. </p>
								<p>Yıldız çağrı atiksoy, bordo bereliler'e mensup Kılıç Timi'nin destansı hikayesini konu alan Savaşçı'da, Uluslararası politika konusunda umzan olan aslı karakterine hayat verecek. Aslı dizide bir kaza sonrası tanıştıkları Kağan'la ülkesini ve değerlerini yeniden keşfedecek.</p>
								<p>Bir oyuncu olarak güncel ve öğretici unsurlar taşıyan bir yapımla seyirciyle bulışmay arzu ederken Savaşçı dizisinden teklif aldığını söyleyen atiksoy, canlandırdığıAslı karakterini,"Aslının en çok cesaretini dobralığını ve hümanistliğini sevdim. " Sözünü esirgemeyen aslı, cümlelerini belki de çok az kişinin kurabileceği açıklıkta ve netlikte kuruyor. kendi gerçekliğini doğrularını var olan sisteme karşı savunuyor. İnsanların eşit şartlarda, barış ve refah ortamında yaşayabilmeleri için mücadele ediyor. sözleriyle anlattı.</p>
							</div>
							<a href="#">Devamını Oku</a>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>


<section class="subscribe-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">{{trans('site.abone-ol')}}</h1>
				<form>
					<h5>{{trans('site.haberleri-ve-duyurulari-ilk-bizden-alin')}}</h5>
					<input type="email" name="" placeholder="{{trans('site.e-posta')}}" required>
					<button>{{trans('site.kayit-ol')}}</button>

				</form>
			</div>

		</div>
	</div>
</section>


<section class="social-timeline">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title second">{{trans('site.sosyal-medyalar')}}</h1>
				<ul class="nav nav-tabs" id="socialTabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="facebook-tab" data-toggle="tab" href="#facebook" role="tab" aria-controls="facebook" aria-selected="true">Facebook</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="twitter-tab" data-toggle="tab" href="#twitter" role="tab" aria-controls="twitter" aria-selected="false">Twitter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="instagram-tab" data-toggle="tab" href="#instagram" role="tab" aria-controls="instagram" aria-selected="false">İnstagram</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="youtube-tab" data-toggle="tab" href="#youtube" role="tab" aria-controls="youtube" aria-selected="false">Youtube</a>
					</li>
				</ul>
				<div class="tab-content" id="socialTabsContent">
					<div class="tab-pane fade show active" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
						<span class="right-wrapper fb"><i class="fab fa-facebook-f"></i> <b>facebook</b></span>
						<div class="embed-area">
							{!! $facebookhtml !!}
						</div>
					</div>
					<div class="tab-pane fade" id="twitter" role="tabpanel" aria-labelledby="twitter-tab">
						<span class="right-wrapper tt"><i class="fab fa-twitter"></i><b>twitter</b></span>
						<div class="embed-area">
							{!! $twitterhtml !!}
						</div>
					</div>
					<div class="tab-pane fade" id="instagram" role="tabpanel" aria-labelledby="instagram-tab">
						<span class="right-wrapper in"><i class="fab fa-instagram"></i><b>instagram</b></span>
						<div class="embed-area">
							{!! $instagramhtml !!}

						</div>
					</div>
					<div class="tab-pane fade" id="youtube" role="tabpanel" aria-labelledby="youtube-tab">
						<span class="right-wrapper yt"><i class="fab fa-youtube"></i><b>YouTube</b></span>
						<div class="embed-area">
							<div class="row">
								<div class="col-md-4"><div class="youtube-player" data-id="Gb91tXvYXUE"></div></div>
								<div class="col-md-4"><div class="youtube-player" data-id="EfdHiI6hmxs"></div></div>
								<div class="col-md-4"><div class="youtube-player" data-id="Gb91tXvYXUE"></div></div>
								<div class="col-md-4"><div class="youtube-player" data-id="EfdHiI6hmxs"></div></div>
								<div class="col-md-4"><div class="youtube-player" data-id="Gb91tXvYXUE"></div></div>
								<div class="col-md-4"><div class="youtube-player" data-id="EfdHiI6hmxs"></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="fragman-Modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="youtube-player" data-id="Gb91tXvYXUE"></div>
		</div>
	</div>
</div>

@endsection

@section('css')

@endsection

@section('js')

@endsection