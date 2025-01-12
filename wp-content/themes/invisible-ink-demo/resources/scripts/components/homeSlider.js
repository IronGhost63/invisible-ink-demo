import Swiper from "swiper";
import { Pagination, Navigation, EffectFade, Autoplay } from "swiper/modules";

export default () => {
  const homeSlide = document.querySelector('.home-slider__swiper');

  if ( homeSlide === null ) {
    return;
  }

  const carousel = new Swiper( homeSlide, {
    modules: [Pagination, Navigation, EffectFade, Autoplay],
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    longSwipes: false,
    loop: true,
    speed: 2000,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: ".home-slider__button-next",
      prevEl: ".home-slider__button-prev",
    },
    pagination: {
      el: ".home-slider__pagination",
      clickable: true,
      renderBullet: function (index, className) {
        const slides = homeSlide.querySelectorAll('.swiper-slide');

        return `<div class="${className}"><p>${slides[index].dataset.title}</p></div>`;
      },
    },
  });
}
