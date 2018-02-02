<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<!-- Tüm cihazlara uyumlu -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		window.onload = function() {
			$('.load-items').fadeOut(1000);
			$('body').css('overflow','unset');
			setTimeout(function(){
				document.documentElement.scrollTop = 0;
				document.body.scrollTop = 0;
			},100);
			document.documentElement.scrollTop = 0;
			document.body.scrollTop = 0;
		};
	</script>

	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>


	<!-- Pretty CheckBox -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


	<!-- PLAYER -->

	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/mainlogo.png"/>
	<title>Limon Film</title>
</head>

<body>
	<div class="load-items">
		<div class="loadingio-spinner-eclipse-bf2elllyjg"><div class="ldio-s8y2ejiv2k">
			<div></div>
		</div></div>
	</div>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="nav-container">
						<div class="logo">
							<a href="#">
								<img src="images/logo.svg">
							</a>
						</div>
						<div class="Navigation">
							<ul>
								<li class="drop-link"><a href="#">FİLM<i class="fas fa-chevron-down"></i></a>
									<div class="film-dropdown">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-6">
													<h4>Yeni Filmler</h4>
													<div class="carousel-area">
														<div class="owl-carousel owl-theme owl-menufilm">
															<div class="item">
																<a href="#"><img src="images/cingoz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/poyraz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/cingoz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/poyraz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/cingoz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/poyraz.jpg"></a>
															</div>
															<div class="item">
																<a href="#"><img src="images/cingoz.jpg"></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<h4>Tüm Kategoriler</h4>
													<ul class="category">
														<li><a href="#">Aile</a></li>
														<li><a href="#">Aksiyon - Macera</a></li>
														<li><a href="#">Animasyon</a></li>
														<li><a href="#">Belgesel</a></li>
														<li><a href="#">Biyografi</a></li>
														<li><a href="#">Drama</a></li>
														<li><a href="#">Dünya Sineması</a></li>
														<li><a href="#">Fantastik - Bilim Kurgu</a></li>
														<li><a href="#">Festival - Gizem</a></li>
														<li><a href="#">Klasik</a></li>
														<li><a href="#">Komedi</a></li>
														<li><a href="#">Korku - Gerilim</a></li>
														<li><a href="#">Polisiye - Suç</a></li>
														<li><a href="#">Romantik</a></li>
														<li><a href="#">Savaş</a></li>
														<li><a href="#">Tarih</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li><a href="#">DİZİ</a></li>
								<li><a href="#">CANLI TV</a></li>
								<li><a href="#">LİMON FİLM</a></li>
								<li><a href="#" class="ucretsiz">ÜCRETSİZ DENE</a></li>
							</ul>
						</div>
						<div class="search-user">
							<div class="search-area">
								<input type="" name="" placeholder="Ne izlemek istersin ?">
								<button><img src="images/search.svg"></button>
							</div>
							<div class="user">
								<div class="name">
									<p>Hoşgeldin,</p>
									<p>Murat CAN</p>
								</div>
								<div class="image">
									<img src="images/user.svg">
								</div>
								<div class="user-dropdown">
									<ul>
										<li>
											<a href="#"><i class="fas fa-sign-out-alt"></i>Çıkış Yap</a>
										</li>
										<li>
											<a href="#"><i class="fas fa-shield-alt"></i>Çocuk</a>
										</li>
										<li>
											<a href="#"><i class="fas fa-users-cog"></i>Profil Ayarları</a>
										</li>
										<li>
											<a href="#">Emre Sarıoğlu<img src="https://fakeimg.pl/300/"></a>
										</li>
										<li>
											<a href="#">Emre Sarıoğlu<img src="https://fakeimg.pl/300/"></a>
										</li>
										<li>
											<a href="#">Emre Sarıoğlu<img src="https://fakeimg.pl/300/"></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>