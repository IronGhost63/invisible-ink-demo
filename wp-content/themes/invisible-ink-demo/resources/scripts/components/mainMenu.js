import { delay } from "@scripts/utils";

export default () => {
  const menuBtn = document.querySelector('.navigation__mobile-trigger');
  const closeBtn = document.querySelector('.main-menu__close-btn');
  const menuCanvas = document.querySelector('.main-menu');

  if ( menuBtn === null || closeBtn === null || menuCanvas === null ) {
    return;
  }

  menuBtn.addEventListener('click', (e) => {
    e.preventDefault();

    menuCanvas.classList.add('active');
    menuCanvas.classList.add('display');
  });

  closeBtn.addEventListener('click', (e) => {
    e.preventDefault();

    menuCanvas.classList.remove('display');
    delay(150).then( () => menuCanvas.classList.remove('active') );
  });
}
