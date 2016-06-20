$(document).ready(function() {
	"use strict";

	var base = $('base').attr('href');
	var share_url = base + 'sharrre/';
	var screen_width = $(window).width();

	/* Click .box selects radio button on shipping methods and payment methods pages */
	(function() {
		$('#checkout-content').on('click', '.shipping-methods .box, .payment-methods .box', function(e) {
			var radio = $(this).find(':radio');
			radio.prop('checked', true);
		});
	})();
	
	/* Isotope on shop pages */
	(function() {
		var $product_list = $('.product-list.isotope');
		$product_list.addClass('loading');
		$product_list.imagesLoaded(function() {
			$product_list.isotope({
				itemSelector: 'li',
			}, function($items) {
				this.removeClass('loading');
			});
		});
	})();
	
	/* ImagesLoaded script on blog page */
	(function() {
		imagesLoaded($('.post-list img'), function(){
			
			var $post_list = $('.post-list');
			$post_list.isotope({
				itemSelector: 'article.post-grid'
			});
		});
	
	})();

	/* tooltip on product page */
	$("[rel='tooltip']").tooltip();
	
	/* Header search bar auto complete popup */
	$('#query').keyup(function(){
		$('#autocomplete-results').css({display:'block'});
		setTimeout(function(){
			$('#autocomplete-results').css({display:'none'});
		},3000);
	});
	
});
/*$(window).smartresize(function() {
	"use strict";	
	
	var screen_width = $(window).width();
	
	var $product_list = $('.product-list.isotope');
	if (typeof($product_list.isotope)!='undefined'){
		$product_list.isotope('reLayout');
	}	

	
	boutique.resize_menu(screen_width);
});*/
$(window).load(function() {
	"use strict";

	var menu_class='.main-menu.selected';

	function reset_mega(){
		$('.main-menu').css('right',0).removeClass('selected');			
		$('.main-menu li').removeClass('selected');
		$('.main-menu li.back').remove();
		$('.megamenu_container').attr('style','');		

		$('.megamenu-sub-menu').css({position:'absolute'});
	}

	$('.main-menu-button').click(function(){


		if (!$('#menu-main-navigation',$(this).parents(':first')).hasClass('selected'))
			reset_mega();
		else 
			$('.megamenu_container').attr('style','');		
;		

		$('#menu-main-navigation',$(this).parents(':first')).attr('style','').toggleClass('selected');						
		

		if ($('#menu-main-navigation',$(this).parents(':first')).hasClass('selected')){

			$(menu_class+' li').each(function(){


				if ($('>ul',$(this)).length>0){
					if ($('.back',$('>ul',$(this))).length<=0)
						$('>ul',$(this)).prepend('<li class="back"><a href="#">Back</a></li>');
				}
			});
		}

		return false;
	});

	$(window).resize(function(){
		reset_mega();

		$('.zoomContainer').remove();

		if (typeof(zoomConfig)!='undefined'){
			$('.product-images .primary img').elevateZoom(zoomConfig);	
		}
		
	});



	$(menu_class+' a').click(function()
	{
		$(menu_class).css({overflow:'visible'});

		if ($(this).parents('li:first').hasClass('back')){
			

			var level=$(this).parentsUntil(menu_class).parents('ul').length-2;

			var obj=$(this);

			$(this).parents(menu_class).animate({
				'right':(100*level)+'%'					
			},250,function(){

				$(obj).parents('li:first').parents('ul:first').parents('li:first').removeClass('selected');
			});

			var height=parseInt($(obj).parents('li:first').parents('ul:first').parents('li:first').parents('ul:first').outerHeight());
		
			$(menu_class).parents('.megamenu_container:first').css('height',height);


			return false;

		} else if ($(' > ul',$(this).parents('li:first')).length  > 0){

			$(this).parents('li:first').addClass('selected');

			var level=$(this).parentsUntil(menu_class).parents('ul').length;
			

			$(this).parents(menu_class).animate({
				'right':(100*level)+'%'					
			},250,function(){

			});

			var height=parseInt($('>ul',$(this).parents('li:first')).outerHeight());
		
			$(menu_class).parents('.megamenu_container:first').css('height',height);
			
			return false;
		}		
	});
});