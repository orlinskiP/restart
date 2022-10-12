$('#block_slider .slides').on('init', function(event, slick, currentSlide, nextSlide){
		$('#block_slider .slides .slide[data-slick-index="0"]').addClass("animate");
});

$('#block_slider .slides').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('#block_slider .slides .slide[data-slick-index="'+currentSlide+'"]').removeClass("animate");
});

$('#block_slider .slides').on('afterChange', function(event, slick, currentSlide, nextSlide){
	
		$('#block_slider .slides .slide[data-slick-index="'+currentSlide+'"]').addClass("animate");
});

$("#block_slider .slides").slick({
	dots: true,
	autoplay: true,
  	autoplaySpeed: 500000,
  	cssEase: 'ease',
  	speed: 1200,
  	pauseOnHover: false
});
 