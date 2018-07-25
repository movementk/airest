(function($){
	// visual slide
	$(window).ready(function(){
		$('.jumbotron').slick({
			fade: true,
			infinite: true,
			speed: 1200,
			autoplaySpeed: 7000,
			dots: true,
			autoplay: true,
			arrows: false,
			adaptiveHeight: true,
			cssEase: 'linear'
		});
	});
	$('.jumbotron').on('afterChange', function(event, slick, currentSlide, nextSlide){
		$('.slick-slide.visual-slide').removeClass('action');
		setTimeout(function (){ 
			$('.slick-active.visual-slide').addClass('action'); 
		});
	});
	$('.jumbotron').on('init', function(event,slick){
		setTimeout(function(){ 
			$('.slick-active.visual-slide').addClass('action'); 
		});
	});

	// best-slide
	$(window).ready(function(){
		$('.best-product ul').slick({
			dots: false,
			infinite: false,
			slidesToShow: 2.3,
			prevArrow: '<button class="slick-prev"><i class="icon-left"></i></button>',
			nextArrow: '<button class="slick-next"><i class="icon-right"></i></button>'
		});

		if($(window).width() > 700){
			$(".best-product ul").slick("slickSetOption","slidesToShow",3);
		}
		if($(window).width() > 1000){
			$(".best-product ul").slick("slickSetOption","slidesToShow",4);
			$(".slick-next").hide();
		}

		$(".slick-prev").hide();

		$(".best-product ul").on('afterChange', function(event, slick, currentSlide){
			var max_slide = Math.ceil(slick.slideCount / $('.best-product ul').slick("slickGetOption","slidesToShow"));

			if(currentSlide == 0){
				$(".slick-prev").hide();
			}

			if(currentSlide > 0){
				$(".slick-prev").show();
			}

			if($(".slick-slide:last").hasClass("slick-active")){
				$(".slick-next").hide();
			} else {
				$(".slick-next").show();
			}
		});
	});

	$(window).on('load',function(){
		if($(window).width() > 700){
			$(".best-product ul").slick("slickSetOption","slidesToShow",3);
		}
		if($(window).width() > 1000){
			$(".best-product ul").slick("slickSetOption","slidesToShow",4);
			$(".slick-next").hide();
		}

		$('.promotional').mCustomScrollbar({
			horizontalScroll: true,
			callbacks:{
				onInit:function(){
					$('.promotional').each(function(index, elem) {
						if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
							$(elem).addClass('active');
							if($(window).width() > 301){
								setTimeout(function(){ $(".product-1").addClass("action"); }, 1000);
							}
							if($(window).width() > 607){
								setTimeout(function(){ $(".product-2").addClass("action"); }, 1800);
							}
							if($(window).width() > 905){
								setTimeout(function(){ $(".product-3").addClass("action"); }, 2600);
							}
							if($(window).width() > 951){
								setTimeout(function(){ $(".product-4").addClass("action"); }, 3400);
							}

							setTimeout(function(){ $(".promotional .details").addClass("action"); }, 600);
						}
					});
				},
				onTotalScroll:function(){
				},
				whileScrolling: function(){
					var leftPct = this.mcs.leftPct; // 가로스크롤바가 이동한 퍼센트
					var leftPst = this.mcs.left; // 컨텐츠가 이동한 거리

					$(".promotional .details").css({"left": Math.abs(leftPst)+"px"});

					if(parseInt($(window).width() + Math.abs(leftPst)) > 301){
						setTimeout(function(){ $(".product-1").addClass("action"); }, 500);
					}
					if(parseInt($(window).width() + Math.abs(leftPst)) > 607){
						setTimeout(function(){ $(".product-2").addClass("action"); }, 500);
					}
					if(parseInt($(window).width() + Math.abs(leftPst)) > 905){
						setTimeout(function(){ $(".product-3").addClass("action"); }, 500);
					}
					if(parseInt($(window).width() + Math.abs(leftPst)) > 951){
						setTimeout(function(){ $(".product-4").addClass("action"); }, 500);
					}
				}
			}
		});
	});

	// promotional effect event 
	$(window).on('scroll', function() {
		$('.promotional').each(function(index, elem) {
			if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
				if(!$(elem).hasClass("active")){
					$(elem).addClass('active');

					if($(window).width() > 301){
						setTimeout(function(){ $(".product-1").addClass("action"); }, 1000);
					}
					if($(window).width() > 607){
						setTimeout(function(){ $(".product-2").addClass("action"); }, 1800);
					}
					if($(window).width() > 905){
						setTimeout(function(){ $(".product-3").addClass("action"); }, 2600);
					}
					if($(window).width() > 951){
						setTimeout(function(){ $(".product-4").addClass("action"); }, 3400);
					}

					setTimeout(function(){ $(".promotional .details").addClass("action"); }, 600);
				}
			}
		});
	});

	$(window).resize(function(){ 
		if($(window).width() < 700){
			$(".best-product ul").slick("slickSetOption","slidesToShow",2.3);
			$(".slick-next").show();
		}
		if($(window).width() > 700){
			$(".best-product ul").slick("slickSetOption","slidesToShow",3);
			$(".slick-next").show();
		}
		if($(window).width() > 1000){
			$(".best-product ul").slick("slickSetOption","slidesToShow",4);
			$(".slick-next").hide();
		}
	});

	// promotional circle effect
	setInterval(function(){
		$('.product .item .circle').toggleClass('on');
	},500);

	// 유튜브 팝업 종료관련
	$("#videoModal").on('hidden.bs.modal', function(e) {
		$iframe = $(this).find( "iframe" );
		$iframe.attr("src", $iframe.attr("src"));
	});

	// 팝업 슬라이드 관련
	$('.product-modal').on('show.bs.modal', function (e) {
		setTimeout(function(){
			$('.product-modal .modal-body .product-sldier > ul').slick({
				autoplay: true,
				infinite: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: false,
				cssEase: 'linear'
			});
		}, 200);
	});

})(jQuery);