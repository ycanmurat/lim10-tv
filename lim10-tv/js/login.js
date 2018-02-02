$(document).ready(function(){
	$('span.remember').click(function() {
		$('div.forgot-area').slideToggle(500);
		$('div.login-area').slideToggle(500);
	});

	$('.forgot-area span.sign.toback').click(function() {
		$('div.forgot-area').slideToggle(500);
		$('div.login-area').slideToggle(500);
	});

	$('.sign-area span.sign.toback').click(function() {
		$('div.sign-area').fadeToggle(0);
		$('div.login-area').fadeToggle(0);
	});

	$('span.sign.in').click(function() {
		$('div.sign-area').slideToggle(0);
		$('div.login-area').slideToggle(0);
	});

	$("div.pass-show input").click(function() {
		if ($('div.login-area input#password').attr("type") == "password") {
			$('div.login-area input#password').attr('type','text');
		}else {
			$('div.login-area input#password').attr('type','password');
		}
	});

	$('section.user-login input').keyup(function(){
		if ($(this).val() !== '') {
			$(this).addClass('empty');
			$(this).parents('.input-group').addClass('focused');
		}else {
			$(this).removeClass('empty');
			$(this).parents('.input-group').removeClass('focused');
		}
	});

	$('section.user-login input#years').keyup(function(){
		if ($(this).val() !== '') {
			$(this).css('color','black');
		}else {
			$(this).css('color','#b7b7b6');
		}
	});
});

// Form Validation...

function check_email_address(email_address) {
	var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	return pattern.test(email_address);
}

$( "form#login-form" ).submit(function( event ) {
	$('.global-alert').hide();
	$(" #email ").css( "border-left", "" );
	$(" #password ").css( "border-left", "" );
	event.preventDefault();
	var form_data = $( this ).serializeArray();
	if (form_data[0].value.length !== 0) {
		if ( check_email_address( form_data[0].value )) {
			if (form_data[1].value.length !== 0) {
				console.log("ok"); 
			} else {// Giriş yapıldı uyarısı
				$( ".login-password-group").prepend( '<span class="global-alert">Şifre hatalı !</span>' );
				$(" #password ").css( "border-left", "4px solid red" );
			}
		} else {
			$( ".login-email-group").prepend( '<span class="global-alert">E-mail Hatalı !</span>' );
			$(" #email ").css( "border-left", "4px solid red" );
		}
	} else {
		$( ".login-email-group").prepend( '<span class="global-alert">Hatalı giriş !</span>' );
		$(" #email ").css( "border-left", "4px solid red" );
	}
});

$( "form#register-form" ).submit(function( event ) {
	var status = 1;
	event.preventDefault();
	var register_form_data = $( this ).serializeArray();
	console.log(register_form_data);
	$.each(register_form_data, function( index, value ) {
		$("#"+register_form_data[index].name).css( "border-left", "" );
		$('.register-error-'+register_form_data[index].name).remove();
		if (register_form_data[index].value.length === 0) {
			$("."+register_form_data[index].name).prepend( '<span class="global-alert register-error-'+register_form_data[index].name+'">Eksiksiz doldurunuz.</span>' );
			$("#"+register_form_data[index].name).css( "border-left", "4px solid red" );
			status ++;
		}
	});
	if (status < 2) {
		if ( check_email_address( register_form_data[4].value )) {
			if (register_form_data[2].value !== register_form_data[5].value) {
				$(".register-password").prepend( '<span class="global-alert register-error-register-email">Şifreler Eşleşmiyor !</span>' );
				$(".register-password-check").prepend( '<span class="global-alert register-error-register-email">Şifreler Eşleşmiyor !</span>' );
				$("#register-password").css( "border-left", "4px solid red" );
				$("#register-password-check").css( "border-left", "4px solid red" );
			} else {
				console.log("herşey tamam");
			}
		} else {
			$(".register-email").prepend( '<span class="global-alert register-error-register-email">E-mail Hatalı !</span>' );
			$("#register-email").css( "border-left", "4px solid red" );
		}
	}
});

$( "form#reset-form" ).submit(function( event ) {
	$('.global-alert').hide();
	$(" #toreset ").css( "border-left", "" );
	event.preventDefault();
	var form_data = $( this ).serializeArray();
	if (form_data[0].value.length !== 0) {
		if ( check_email_address( form_data[0].value )) {
			console.log('ok');
			$( ".toreset").prepend( '<span class="global-alert text-success">Sıfırlama bağlantısı gönderildi.</span>' );
			$(" #toreset ").css( "border-left", "4px solid green" );
		} else {
			$( ".toreset").prepend( '<span class="global-alert">E-mail Hatalı !</span>' );
			$(" #toreset ").css( "border-left", "4px solid red" );
		}
	} else {
		$( ".toreset").prepend( '<span class="global-alert">Hatalı giriş !</span>' );
		$(" #toreset ").css( "border-left", "4px solid red" );
	}
});



