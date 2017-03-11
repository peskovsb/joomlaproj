$('.fancybox-sr').fancybox({
	fitToView: false, // add this
	autoWidth: true, //
	tpl:{
		closeBtn : '<a class="fancybox-item fancybox-close" href="javascript:;"><i class="material-icons w3-xlarge">close</i><br>Закрыть</a>',
		next     : '<a class="fancybox-nav fancybox-next" href="javascript:;">' +
		'<div class="abs-positioner abs-next"><span><i class="material-icons w3-xxlarge">arrow_forward</i></span></div>' +
		'</a>',
		prev     : '<a class="fancybox-nav fancybox-prev" href="javascript:;">' +
		'<div class="abs-positioner abs-prev"><span><i class="material-icons w3-xxlarge">arrow_back</i></span></div>' +
		'</a>',
	},
	openEffect:'none',
	padding: 0,
	closeEffect:'none',
	openSpeed:0,
	closeSpeed:0,
	nextEffect:'none',
	prevEffect:'none',
});

$('.btnsendresponce').on('click',function(){
	$('#success-result-rs').hide();
	$('#sendresponceform').trigger('reset');
	$('.error-sr').remove();
	$('#sendresponceform #files-sr').prev().css({'color':'#444'});
	$('#sendresponceform input[type="text"]').css({
		'border-color':'#d1d1d1'
	});
});

$(document).ready(function(){
	$("#phone-sr").mask('+7 (000) 000-00-00');
});

$('#sendresponceform #files-sr').on('click',function(){
	$(this).prev().css({'color':'#444'});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});

$('#sendresponceform #files-sr').on('change',function(){
	$(this).prev().css({'color':'#444'});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});

$('#sendresponceform #files-sr').on('focus',function(){
	$(this).prev().css({'color':'#444'});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});

$('#sendresponceform input[type="text"]').on('click',function(){
	$(this).css({
		'border-color':'#d1d1d1'
	});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});
$('#sendresponceform input[type="text"]').on('blur',function(){
	$(this).css({
		'border-color':'#d1d1d1'
	});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});
$('#sendresponceform input[type="text"]').on('focus',function(){
	$(this).css({
		'border-color':'#d1d1d1'
	});
	$(this).next('.error-sr').remove();
	$('.custom-m-rs .error-sr').remove();
});

	$('#sendresponceform').on('submit', function(e){
		e.preventDefault();

		$('.error-sr').remove();

		$('.btn-preloader-sr').show();
		$('.sr-submbtn').hide();

		validation = true;
		var name_sr =$('#name-sr');
		var phone_sr =$('#phone-sr');
		var email_sr =$('#mail-sr');
		var comment_sr =$('#comment-sr');
		var mistakesr = $('#mistake-sr');
		if(name_sr.val().length == 0){
			name_sr.after('<span class="error-sr errorstyle-sr">Поле Имя является обязательным<span>');
			name_sr.css({
				'border-color':'#c11'
			});
		}

		if(phone_sr.val().length > 0 && phone_sr.val().length < 18){
			phone_sr.after('<span class="error-sr errorstyle-sr">Телефон меньше нужного количества<span>');
			phone_sr.css({
				'border-color':'#c11'
			});
		}

		if(phone_sr.val().length >= 19){
			phone_sr.after('<span class="error-sr errorstyle-sr">Телефон не может быть длинее 18 символов<span>');
			phone_sr.css({
				'border-color':'#c11'
			});
		}

		if((email_sr.val().length == 0) && (comment_sr.val().length == 0) && (phone_sr.val().length ==0)){
			mistakesr.after('<span class="error-sr errorstyle-sr">Нужно заполнить одно из трех полей: Телефон, E-mail, Комментарий<span>');
		}

			formData = new FormData($(this).get(0));
			$.ajax({
				url: $(this).attr('action'),
				type: $(this).attr('method'),
				contentType: false, // важно - убираем форматирование данных по умолчанию
				processData: false, // важно - убираем преобразование строк по умолчанию
				data: formData,
				dataType: 'json',
				success: function (json) {
					$('.btn-preloader-sr').hide();
					$('.sr-submbtn').show();
					if(json.success == false) {
						grecaptcha.reset();
						$(".fancybox-overlay").animate({ scrollTop: 0 }, 200);
						$.each(json.errors, function (key, value) {
							if (key == 'mail') {
								$('#' + key + '-sr').css({
									'border-color': '#c11'
								});
								$('#' + key + '-sr').after('<span class="error-sr errorstyle-sr">' + value + '</span>');
							}
							if (key == 'files') {
								$('#' + key + '-sr').prev().css({'color': '#c11'});
								$('#' + key + '-sr').after('<span class="error-sr errorstyle-sr">' + value + '</span>');
							}
							if (key == 'reCaptcha') {
								$('#mistake-sr').after('<span class="error-sr errorstyle-sr">' + value + '</span>');
							}
						});
					}else{
						//mainH = $('.fancybox-inner').height();
						//$('#success-result-rs').css({'height': mainH});
						$('#success-result-rs').fadeIn(300);
						$(".fancybox-overlay").animate({ scrollTop: 0 }, 200);

						$('#sendresponceform').trigger('reset');
						grecaptcha.reset();
					}
				}
			});

	});
