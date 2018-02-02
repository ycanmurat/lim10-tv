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
	<title>Şifre Sıfırlama - Lim10</title>
</head>
<body>
	<section class="user-login" style="background: url('images/loginbg.jpg');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-auto m-auto">
					<a class="logo" href="#">
						<img src="images/logo.svg">
					</a>

					<!-- Sıfırla -->
					<div class="login-area">
						<form id="forgot-form" method="post" action="#">
							<h5>Şifrenizi Sıfırlayın</h5>
							<div class="row">
								<div class="col-md-12">
									<div class="input-group forgot-password">
										<input  type="password" name="forgot-password" id="forgot-password"/>
										<label for="forgot-password">Yeni Şifre</label>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-group forgot-password-check">
										<input  type="password" name="forgot-password-check" id="forgot-password-check"/>
										<label for="forgot-password-check">Yeni Şifre Tekrar</label>
									</div>
								</div>
							</div>
							<div class="button-area">
								<button type="submit" class="login">TAMAMLA</button>
								<span class="or">YA DA</span>
								<span class="sign toback"><a class="text-dark" href="#"> GİRİŞE DÖN</a></span>
							</div>
						</form>
					</div>
					<!-- Sıfırla -->
				</div>
			</div>
		</div>
	</section>
	<script>
		$('section.user-login input').keyup(function(){
			if ($(this).val() !== '') {
				$(this).addClass('empty');
				$(this).parents('.input-group').addClass('focused');
			}else {
				$(this).removeClass('empty');
				$(this).parents('.input-group').removeClass('focused');
			}
		});


		$( "form#forgot-form" ).submit(function( event ) {
			var status = 1;
			event.preventDefault();
			var forgot_form_data = $( this ).serializeArray();
			console.log(forgot_form_data);

			$.each(forgot_form_data, function( index, value ) {
				$("#"+forgot_form_data[index].name).css( "border-left", "" );
				$('.forgot-error').remove();
				if (forgot_form_data[index].value.length === 0) {
					$("."+forgot_form_data[index].name).prepend( '<span class="global-alert forgot-error-'+forgot_form_data[index].name+'">Eksiksiz doldurunuz.</span>' );
					$("#"+forgot_form_data[index].name).css( "border-left", "4px solid red" );
					status ++;
				}
			});
			if (status < 2) {
				if (forgot_form_data[0].value !== forgot_form_data[1].value) {
					$('.global-alert').remove();
					$(".forgot-password").prepend( '<span class="global-alert forgot-error">Şifreler Eşleşmiyor !</span>' );
					$(".forgot-password-check").prepend( '<span class="global-alert forgot-error">Şifreler Eşleşmiyor !</span>' );
					$("#forgot-password").css( "border-left", "4px solid red" );
					$("#forgot-password-check").css( "border-left", "4px solid red" );
				} else {
					console.log("herşey tamam");
					$('.forgot-error-forgot-password').remove();
					$('.forgot-error-forgot-password-check').remove();
				}
			}
		});

	</script>
</body>
</html>
