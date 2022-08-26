var $j = jQuery.noConflict();
$j(function(){
	//alert('hi');


	$j('#bnrSlid').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    dots:true,
	    autoplay: true,
	    autoplayTimeout:3000,
	    items:1,
	    animateOut: 'fadeOut'
	});



  $j('#menu-top-menuRap > .cls').on('click', function(){    //alert('hi');
    //alert('ho');
    $j(this).parent().removeClass('open');
    $j(this).parent().css('display', 'none');
    $j('#cssmenu > .button').removeClass('menu-opened');
  });


});

