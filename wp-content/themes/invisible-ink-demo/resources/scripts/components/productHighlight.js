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
      el: '.swiper-scrollbar',
      draggable: true,
    },
    navigation: false,
    slidesPerView: 3.5,
    spaceBetween: '16',
    breakpoints: {
      720: {
        slidesPerView: 4,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      },
    },
  });
}
