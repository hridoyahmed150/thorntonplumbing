jQuery(window).load(function(){

	// Wow init
	// new WOW({
	// 	offset: 150,
	// 	mobile: false
	// }).init();
	// new WOW().init({live: !1});
	AOS.init({
		once: true,
		disable : 'mobile'
	});


	// Parallax
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) === false) {
		window.skrolr = skrollr.init({
			smoothScrolling : false,
			forceHeight : false,
		    easing: {
		        //This easing will sure drive you crazy
		        wtf: Math.random,
		        inverted: function(p) {
		            return 1 - p;
		        }
		    }
		});
	}

});

(function($) {

	const stickyFormWrap = jQuery('.c20_sticky'),
	stickyForm = jQuery('.c20_sticky_trigger');

	if(stickyFormWrap.length > 0 ){
		stickyForm.on('click', function (e) {
			jQuery(this).parent(stickyFormWrap).toggleClass('show-sticky-form');
		});
	}

	const siteBody = jQuery('body');
	const mainHeader = jQuery('.main-header');


	jQuery(window).scroll(function(){
		
		scroll = jQuery(window).scrollTop();

		if (scroll > mainHeader.height() ){
			siteBody.addClass('enable-sticky-header');
		} else {
			siteBody.removeClass('enable-sticky-header');
		}
	});

	var modalTrigger=  jQuery('.triggerForm');
	var modalForm 	=  jQuery('#commonContactForm');

	if( modalTrigger.length > 0 || modalForm.length > 0) {

		modalTrigger.on('click', function(e) {
			
			e.preventDefault();

			modalForm.modal('toggle');
		});

	}

	// jQuery('#myModal').modal('toggle')




	const hamMenuTrigger = jQuery('.c20_ham, .mobile-header-icon button');

	if( hamMenuTrigger.length > 0 ){

		hamMenuTrigger.on('click', function function_name() {

			jQuery(this).toggleClass('is-active');

			siteBody.toggleClass('mobile-menu-show');

		});

	}

	const mobileMenu = jQuery('#c20-mobile-menu');
	const mobileMenuArrow = jQuery('#c20-mobile-menu li.menu-item-has-children .nav-arrow');

	mobileMenuArrow.on('click', function (e) {
		jQuery(this).closest('li.menu-item-has-children').children('ul').slideToggle();
		if(!jQuery(this).closest('li.menu-item-has-children').hasClass('current_page_ancestor')){
			jQuery(this).closest('li.menu-item-has-children').toggleClass('show-child-menu');
		}
	});



	$('.testimonial-slider-init').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		fade: false,
		adaptiveHeight: true,
		prevArrow: $('.prev'),
		nextArrow: $('.next')
	});


	$('.coupon-card-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: false,
		adaptiveHeight: true,
	});

	$('.collapse').collapse();

	var collapseGRoup = $('.c20_collapse_group');
	var collapse = $('.c20_collapse');
	var collapseHead = $('.c20_collapse_header');
	var collapseList = $('.c20_collapse_nav');

	if(collapseHead.length > 0 ) {
		collapseHead.on('click', function(e) {
			$(this).parent().toggleClass('collapse_icon');
			$(this).parent().find('.c20_collapse_nav').slideToggle();
		})
	}

})(jQuery)


    jQuery('.print-coupon').click(function(e) {

        e.preventDefault();

        var divContents = jQuery(this).find('.single-coupon').html();

        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head><title>Coupon</title>');

        printWindow.document.write('<style type="text/css">*{box-sizing:border-box;font-family:Arial,Helvetica Neue,Helvetica,sans-serif;}.single-coupon{width:280px;margin:0 auto 30px;border:5px dashed #0f3476;cursor:pointer;position:relative;overflow:hidden;text-align:center}.single-coupon>img{position:absolute;left:0;top:0;z-index:0;width:100%}.single-coupon>div{position:relative}.coupon-top{padding:20px 20px 15px}.coupon-top img{max-width:100%;padding-bottom:35px;margin-bottom:30px}.coupon-price{display:flex;align-items:center;justify-content:center;font-size:30px;line-height:1!important;text-transform:uppercase}.coupon-price strong{font-size:60px;line-height:1;margin:0 5px}.coupon-body{background:#e8ed32;-webkit-print-color-adjust:exact;padding:15px 3px 10px}.coupon-title{font-size:22px;line-height:1;color:#0e3474;font-weight:700;text-transform:uppercase;margin-bottom:10px}.coupon-body .coupon-subtitle{font-size:10px;line-height:1;color:#0e3474;font-weight:700}.coupon-footer{background:#0f3476;-webkit-print-color-adjust:exact;color:#dceefe;padding:10px 20px;font-size:12px}.coupon-footer a{color:#e8ed32!important}</style>');

        printWindow.document.write('</head><body>');
        printWindow.document.write('<div class="single-coupon">'+divContents+'</div>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
        printWindow.close();
    });






