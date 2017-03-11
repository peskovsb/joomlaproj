
function findElement(){
	return $('.block-prf');	
}
function setHeight(){
	var w = findElement().width();
    findElement().children('.block-prf_wrapper').css({'height':w});
}

function counterNumber(){
	var element = $('.checkerblocks');

	$(element).each(function() {
	   var count = $(this).children().length;
	   if(count>0){
	   		$(this).children().css({'width':(100/count)+'%'});
	   		$(this).children().eq(0).addClass('active');
	   }
	});
}


window.onload = function() { 
	if(document.readyState === 'complete'){
			setHeight();
		    $('#portfoliopage').hide();
		    $('#notshowheader').show();
		    findElement().show();
		    counterNumber();
	}
}

$(window).resize(function() {
    setHeight();
});


$(document).ready(function(){
	$('.checkerblocks li').hover(function(){
		var index = $(this).index();
		$(this).parent().prev().children('li').hide();
		$(this).parent().prev().children('li').eq(index).show();

		$(this).parent().children('li').removeClass('active');
		$(this).addClass('active');
	});	
	$('.checkerblocks').hover(function(){
		//active
	},function(){
		$(this).prev().children('li').hide();
		$(this).prev().children('li').eq(0).show();
		
		$(this).children('li').removeClass('active');
		$(this).children('li').eq(0).addClass('active');
	});
});
