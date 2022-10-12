$('.logo-rotator').slick({

	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 2,
	arrows: true,
	slidesToScroll: 4,
	autoplay: true,
	speed: 1500,
	autoplaySpeed: 3000,
	cssEase: "cubic-bezier(0.215, 0.610, 0.355, 1.000)",
	useTransform: true,
	useCSS: true,	
	responsive: [
		{
			breakpoint: 900,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
});
