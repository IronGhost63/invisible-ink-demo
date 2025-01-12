import Swiper from "swiper"
import { Scrollbar, Navigation } from 'swiper/modules';

export default () => {
  const productHighlight = document.querySelector('.product-highlight__swiper');

  if ( productHighlight === null ) {
    return;
  }

  const carousel = new Swiper(productHighlight, {
    modules: [Scrollbar, Navigation],
    scrollbar: {
      el: '.product-highlight__scrollbar',
      draggable: true,
    },
    navigation: {
      nextEl: ".product-highlight__button-next",
      prevEl: ".product-highlight__button-prev",
    },
    slidesPerView: 3.5,
    spaceBetween: '16',
    breakpoints: {
      720: {
        slidesPerView: 4,
      },
    },
  });
}
