<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Tüm cihazlara uyumlu -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

	<!--                          Fonts                         -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Pretty CheckBox -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
	<!--                    CSS                          -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--                  Font Awesome                    -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="shortcut icon"  href="images/mainlogo.png"/>
	<title>Üye Girişi - Lim10</title>
</head>
<body>
	<section class="user-login" style="background: url('images/loginbg.jpg');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<a class="back" href="index.php">
						<i class="fas fa-arrow-left"></i>
					</a>
				</div>
				<div class="col-md-auto m-auto">
					<a class="logo" href="#">
						<img src="images/logo.svg">
					</a>
					<!-- Üye Girişi -->
					<div class="login-area">
						<form class="needs-validation" id="login-form" method="post" action="#">
							<h5>ÜYE GİRİŞİ</h5>
							<div class="input-group login-email-group">
								<input type="text" name="email" id="email"/>
								<label for="eposta">E-Posta </label>
							</div>
							<div class="input-group login-password-group">
								<input  type="password" name="password" id="password"/>
								<label for="password">Şifre</label>
								<div class="pass-show">
									<div class="pretty p-icon p-toggle">
										<input type="checkbox" />
										<div class="state p-on">
											<i class="icon far fa-eye"></i>
											<label>ON</label>
										</div>
										<div class="state p-off">
											<i class="icon far fa-eye-slash"></i>
											<label>OFF</label>
										</div>
									</div>
								</div>
							</div>
							<div class="remember-forgot">
								<div class="pretty p-icon p-round p-smooth">
									<input type="checkbox" />
									<div class="state p-success">
										<i class="icon fas fa-check"></i>
										<label>Beni hatırla</label>
									</div>
								</div>
								<span class="remember">Şifremi Unuttum</span>
							</div>
							<div class="button-area">
								<button type="submit" class="login">GİRİŞ YAP</button>
								<span class="or">YA DA</span>
								<span class="sign in">ÜYE OL</span>
							</div>
						</form>
					</div>
					<!-- Üye Grişi -->

					<!-- Şifremi Unuttum -->
					<div class="forgot-area">
						<form id="reset-form" method="post" action="#">
							<h5>ŞİFREMİ UNUTTUM</h5>
							<div class="input-group toreset">
								<input type="text" name="toreset" id="toreset">
								<label for="toreset">E-Posta Adresiniz</label>
								<span class="global-alert sended">E-mail Hatalı !</span>
							</div>
							<div class="button-area">
								<button type="submit" class="login">GÖNDER</button>
								<span class="or">YA DA</span>
								<span class="sign toback">GİRİŞE DÖN</span>
							</div>
						</form>
					</div>
					<!-- Şifremi Unuttum -->

					<!-- Kayıt Ol -->
					<div class="sign-area">
						<form id="register-form" method="post" action="#">
							<h5>KAYIT OL</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group register-name">
										<input type="text" name="register-name" id="register-name"/>
										<label for="register-name">Adınız</label>
									</div>

									<div class="input-group register-surname">
										<input type="text" name="register-surname" id="register-surname"/>
										<label for="register-surname">Soyadınız</label>
									</div>
									<div class="input-group register-password">
										<input  type="password" name="register-password" id="register-password"/>
										<label for="register-password">Şifre</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group register-years">
										<input type="date" name="register-years" id="register-years"/>
										<label for="register-years">Doğum Tarihi</label>
									</div>
									<div class="input-group register-email">
										<input type="text" name="register-email" id="register-email"/>
										<label for="register-email">E-Posta Adresiniz</label>
									</div>
									<div class="input-group register-password-check">
										<input  type="password" name="register-password-check" id="register-password-check"/>
										<label for="register-password-check">Şifre Tekrar</label>
									</div>
								</div>
							</div>
							<div class="button-area">
								<button type="submit" class="login">KAYIT OL</button>
								<span class="or">YA DA</span>
								<span class="sign toback">GİRİŞE DÖN</span>
							</div>
						</form>
					</div>
					<!-- Kayıt Ol -->
				</div>
			</div>
		</div>
	</section>
	<script>

	</script>
	<script src="js/login.js?v=<?php echo md5(date('Y-m-d H:i:s')); ?>"></script>
</body>
</html>
