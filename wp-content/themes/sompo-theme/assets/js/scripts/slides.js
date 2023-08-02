var swiperTimeline;

jQuery(function ($) {


	const swiperBannerHome = new Swiper("#home-page #banner .swiper-container", {

		speed: 500,
		slidesPerView: 1,
		autoplay: {
			delay: 7000
		},
		loop: true,
		effect: 'fade',
		pagination: {

			el: "#home-page #banner .swiper-pagination",
			clickable: true,
		},


	});

	const swiperArtigos = new Swiper("#artigos #banner .swiper-container", {

		speed: 500,
		slidesPerView: 1,
		autoplay: {
			delay: 7000
		},
		loop: true,
		effect: 'fade',
		pagination: {

			el: "#artigos #banner .swiper-pagination",
			clickable: true,
		},


	});

	swiperTimeline = new Swiper("#institucional #timeline .swiper-container", {

		speed: 500,
		slidesPerView: 1,
		// autoplay:{
		// 	delay:7000
		// },
		//effect: 'fade',
		navigation: {

			prevEl: "#institucional #timeline  .swiper-button-prev",
			nextEl: "#institucional #timeline  .swiper-button-next",
		},


	});

	swiperTimeline.on('slideChangeTransitionStart',function(){
		range.value = this.activeIndex;
		setValue();
	})


});
const institucional = document.getElementById('institucional');

if(institucional !== null){
const range = document.getElementById('range');
const rangeV = document.getElementById('rangeV');
var setValue = () => {
	const newValue = Number((range.value - range.min) * 100 / (range.max - range.min));
	const newPosition = 10 - (newValue * 0.5);
	rangeV.innerHTML = `<span>${$('[data-timeline="' + range.value + '"]').text()}</span>`;
	rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
	swiperTimeline.slideTo(range.value);
	$( '#range' ).css( 'background', 'linear-gradient(to right, #cb1136, #cb1136 ' + newValue + '%,#e6e6e6 ' + newValue + '%, #e6e6e6)' );
	};
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
}
