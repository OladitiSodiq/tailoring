jQuery(document).on('ready', function() {
	"use strict";
	/* -------------------------------------
			COLLAPSE MENU SMALL DEVICES
	-------------------------------------- */
	function collapseMenu(){
		$('#tg-navigation ul li.menu-item-has-children').prepend('<span class="tg-dropdowarrow"><i class="icon-chevron-right"></i></span>');
		$('#tg-navigation ul li.menu-item-has-children span').on('click', function() {
			$(this).next().next().slideToggle(300);
			$(this).parent('#tg-navigation ul li.menu-item-has-children').toggleClass('tg-open');
		});
	}
	collapseMenu();
	/*--------------------------------------
			CONSULTATION FEE SLIDER			
	--------------------------------------*/
	function ageRangeslider(){
		jQuery("#tg-consultationfeerangeslider").slider({
			range: true,
			min: 0,
			max: 1000,
			values: [ 200, 400 ],
			slide: function( event, ui ) {
				jQuery( "#tg-consultationfeeamount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		jQuery( "#tg-consultationfeeamount" ).val( "$" + jQuery("#tg-consultationfeerangeslider").slider( "values", 0 ) + " - $" + jQuery("#tg-consultationfeerangeslider").slider( "values", 1 ) );
	}
	ageRangeslider();
	/*--------------------------------------
			HOME BANNER SLIDER				
	--------------------------------------*/
	var mySlider = jQuery('#tg-homeslidervone').pogoSlider({
		pauseOnHover: false,
		autoplay: true,
		generateNav: false,
		displayProgess: true,
		autoplayTimeout: 6000,
		targetHeight: 450,
		responsive: true,
	}).data('plugin_pogoSlider');
	/*--------------------------------------
			SHOWCASE SLIDER					
	--------------------------------------*/
	var _elements = jQuery('[id="tg-showcasesliderone"],[id="tg-showcaseslidertwo"]');
	if(_elements.hasClass('tg-showcaseslider')){
		_elements.flipster({
			itemContainer: 'ul',
			itemSelector: 'li',
			spacing: -0.25,
			style: 'flat',
			touch: true,
			loop: true,
			nav: true,
		});
	}
	/*--------------------------------------
			TEAM SLIDER						
	--------------------------------------*/
	var _tg_teammembers = jQuery('#tg-teammembers');
	_tg_teammembers.owlCarousel({
		margin: 30,
		nav: false,
		loop: true,
		dots: true,
		responsiveClass:true,
		navText: [
			'<i class="icon-arrow-left"></i>',
			'<i class="icon-arrow-right"></i>',
		],
		navClass: [
			'tg-btnsimpleprev tg-btnprev',
			'tg-btnsimplenext tg-btnnext'
		],
		responsive : {
			992 : {items:4},
			768 : {items:3},
			480 : {items:2},
			0   : {items:1},
		}
	});
	/*--------------------------------------
			TEAM SLIDER						
	--------------------------------------*/
	var _tg_productslider = jQuery('#tg-productslider');
	_tg_productslider.owlCarousel({
		margin: 30,
		nav: false,
		loop: true,
		dots: true,
		responsiveClass:true,
		navText: [
			'<i class="icon-arrow-left"></i>',
			'<i class="icon-arrow-right"></i>',
		],
		navClass: [
			'tg-btnsimpleprev tg-btnprev',
			'tg-btnsimplenext tg-btnnext'
		],
		responsive : {
			992 : {items:4},
			768 : {items:3},
			480 : {items:2},
			0   : {items:1},
		}
	});
	/*--------------------------------------
			TEAM SLIDER						
	--------------------------------------*/
	var _tg_articlenewsslider = jQuery('#tg-articlenewsslider');
	_tg_articlenewsslider.owlCarousel({
		margin: 30,
		nav: false,
		loop: true,
		dots: true,
		responsiveClass:true,
		navText: [
			'<i class="icon-arrow-left"></i>',
			'<i class="icon-arrow-right"></i>',
		],
		navClass: [
			'tg-btnsimpleprev tg-btnprev',
			'tg-btnsimplenext tg-btnnext'
		],
		responsive : {
			992 : {items:3},
			568 : {items:2},
			0   : {items:1},
		}
	});
	/*--------------------------------------
			Google Map						
	--------------------------------------*/
	var gmapStyles = [
		{"elementType": "geometry", "stylers": [{"color": "#212121"}]},
		{"elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
		{"elementType": "labels.text.fill", "stylers": [{"color": "#757575"}]},
		{"elementType": "labels.text.stroke", "stylers": [{"color": "#212121"}]},
		{"featureType": "administrative", "elementType": "geometry", "stylers": [{"color": "#757575"}]},
		{"featureType": "administrative.country", "elementType": "labels.text.fill", "stylers": [{"color": "#9e9e9e"}]},
		{"featureType": "administrative.land_parcel", "stylers": [{"visibility": "off"}]},
		{"featureType": "administrative.locality", "elementType": "labels.text.fill","stylers": [{"color": "#bdbdbd"}]},
		{"featureType": "poi", "elementType": "labels.text.fill", "stylers": [{"color": "#757575"}]},
		{"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#181818"}]},
		{"featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [{"color": "#616161"}]},
		{"featureType": "poi.park", "elementType": "labels.text.stroke", "stylers": [{"color": "#1b1b1b"}]},
		{"featureType": "road", "elementType": "geometry.fill", "stylers": [{"color": "#2c2c2c"}]},
		{"featureType": "road", "elementType": "labels.text.fill", "stylers": [{"color": "#8a8a8a"}]},
		{"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#373737"}]},
		{"featureType": "road.highway", "elementType": "geometry", "stylers": [{"color": "#3c3c3c"}]},
		{"featureType": "road.highway.controlled_access", "elementType": "geometry", "stylers": [{"color": "#4e4e4e"}]},
		{"featureType": "road.local", "elementType": "labels.text.fill", "stylers": [{"color": "#616161"}]},
		{"featureType": "transit", "elementType": "labels.text.fill", "stylers": [{"color": "#757575"}]},
		{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#000000"}]},
		{"featureType": "water", "elementType": "labels.text.fill", "stylers": [{"color": "#3d3d3d"}]}
	];
	jQuery("#tg-locationmap").gmap3({
		marker: {
			address: "447 Elizabeth St, Melbourne, Victoria, Australia",
			options: {
				title: "Tailor Online HTML5 CSS3 Theme",
				icon: 'images/locationpin.png',
			}
		},
		map: {
			options: {
				zoom: 17,
				styles: gmapStyles,
				scaleControl: true,
				scrollwheel: false,
				mapTypeControl: false,
				disableDefaultUI: true,
				navigationControl: false,
				streetViewControl: false,
				disableDoubleClickZoom: true,
			}
		}
	});
	/* -------------------------------------
			COUNTER							
	-------------------------------------- */
	var _tg_statastics = jQuery('#tg-statastics');
	_tg_statastics.appear(function () {
		var _tg_statastic = jQuery('.tg-statastic h2 span');
		_tg_statastic.countTo();
	});
	/* -------------------------------------
			PRODUCT DETAIL SLIDER			
	-------------------------------------- */
	var sync1 = $("#tg-viewslider");
	var sync2 = $("#tg-thumblider");
	var slidesPerPage = 4;
	var syncedSecondary = true;
	sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: false,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
	}).on('changed.owl.carousel', syncPosition);
	sync2
		.on('initialized.owl.carousel', function () {
			sync2.find(".owl-item").eq(0).addClass("current");
		})
		.owlCarousel({
		items : slidesPerPage,
		dots: true,
		nav: true,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage,
		responsiveRefreshRate : 100
	}).on('changed.owl.carousel', syncPosition2);
	function syncPosition(el) {
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);
		if(current < 0) {
			current = count;
		}
		if(current > count) {
			current = 0;
		}
		sync2
			.find(".owl-item")
			.removeClass("current")
			.eq(current)
			.addClass("current");
		var onscreen = sync2.find('.owl-item.active').length - 1;
		var start = sync2.find('.owl-item.active').first().index();
		var end = sync2.find('.owl-item.active').last().index();
		if (current > end) {
			sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
			sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
		}
		function syncPosition2(el) {
			if(syncedSecondary) {
				var number = el.item.index;
				sync1.data('owl.carousel').to(number, 100, true);
			}
		}
		sync2.on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).index();
			sync1.data('owl.carousel').to(number, 300, true);
	});
});