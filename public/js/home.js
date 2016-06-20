var boutique = {
	animate_nivo: function($progress, speed) {
		$progress.find('span').animate({
				'width': '100%'
		}, speed, 'linear');
	},
	reset_nivo: function($progress) {
		$progress.find('span').stop().css('width', '0%');
	}
};

$(document).ready(function() {
	"use strict";

	/* Slider on home page */
	(function() {
		var slider = $('#slider');
		slider.slider({
			range: true,
			min: 0,
			max: slider.data('max'),
			values: [0, slider.data('max')],
			step: slider.data('step'),
			animate: 200,
			slide: function(event, ui) {
				$('#slider-label').find('strong').html(slider.data('currency') + ui.values[0] + ' &ndash; ' + slider.data('currency') + ui.values[1]);
			},
			change: function(event, ui) {
				var products = $('.product-list').find('li').filter(function() {
					return ($(this).data('price') >= ui.values[0]) && $(this).data('price') <= ui.values[1] ? true : false;
				});
				var $product_list = $('.product-list.isotope');
				$product_list.isotope({
					filter: products
				});
			}
		});
	})();

});

$(window).load(function() {
	"use strict";

	$('html').removeClass('no-js').addClass('js');
	$('.flexslider').flexslider({
		animation: 'fade',
		easing: 'swing',
		smoothHeight: true,
		slideshowSpeed: 10000,
		animationSpeed: 500,
		pauseOnAction: false,
		controlNav: true,
		directionNav: true,
		start: function($slider) {
			var $this = $(this)[0];
			$('<div />', {
				'class': $this.namespace + 'progress'
			}).append($('<span />')).appendTo($slider);
			$('.' + $this.namespace + 'progress').find('span').animate({
				'width': '100%'
			}, $this.slideshowSpeed, $this.easing);
		},
		before: function($slider) {
			var $this = $(this)[0];
			$('.' + $this.namespace + 'progress').find('span').stop().css('width', '0%');
		},
		after: function($slider) {
			var $this = $(this)[0];
			$('.' + $this.namespace + 'progress').find('span').animate({
				'width': '100%'
			}, $this.slideshowSpeed, $this.easing);
		}
	});
});