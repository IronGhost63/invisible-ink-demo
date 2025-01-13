import ScrollReveal from "scrollreveal";

export default () => {
  const home = document.querySelector('body.home');

  if ( home === null ) {
    return;
  }

  ScrollReveal().reveal('.home-slider', {
    duration: 800,
    reset: false
  });

  ScrollReveal().reveal('.product-highlight', {
    duration: 800,
    reset: false
  });

  ScrollReveal().reveal('.product-highlight__title', {
    duration: 800,
    origin: 'top',
    distance: '40px',
    reset: false
  });

  ScrollReveal().reveal('.product-highlight__item', {
    interval: 100,
    duration: 800,
    reset: false
  });

  ScrollReveal().reveal('.image-with-text__image-container', {
    duration: 800,
    origin: 'left',
    distance: '120px',
    reset: false
  });

  ScrollReveal().reveal('.image-with-text__content', {
    duration: 800,
    origin: 'right',
    distance: '120px',
    reset: false
  });

  // ScrollReveal().reveal('.image-with-text', { duration: 800 });
  ScrollReveal().reveal('.contact-form', {
    duration: 800,
    reset: false
  });

  ScrollReveal().reveal('.contact-form__title', {
    duration: 800,
    origin: 'top',
    distance: '40px',
    reset: false
  });

  ScrollReveal().reveal('.newsletter', {
    duration: 800,
    reset: false
  });

  ScrollReveal().reveal('.newsletter__title', {
    duration: 800,
    origin: 'top',
    distance: '40px',
    reset: false
  });
}
