$(document).ready(function(){
/*! DefaultTheme 2022-09-21 */
$(".logo-rotator").slick({infinite:!0,slidesToShow:4,slidesToScroll:2,arrows:!0,slidesToScroll:4,autoplay:!0,speed:1500,autoplaySpeed:3e3,cssEase:"cubic-bezier(0.215, 0.610, 0.355, 1.000)",useTransform:!0,useCSS:!0,responsive:[{breakpoint:900,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$("#block_slider .slides").on("init",function(a,b,c,d){$('#block_slider .slides .slide[data-slick-index="0"]').addClass("animate")}),$("#block_slider .slides").on("beforeChange",function(a,b,c,d){$('#block_slider .slides .slide[data-slick-index="'+c+'"]').removeClass("animate")}),$("#block_slider .slides").on("afterChange",function(a,b,c,d){$('#block_slider .slides .slide[data-slick-index="'+c+'"]').addClass("animate")}),$("#block_slider .slides").slick({dots:!0,autoplay:!0,autoplaySpeed:5e5,cssEase:"ease",speed:1200,pauseOnHover:!1});
});