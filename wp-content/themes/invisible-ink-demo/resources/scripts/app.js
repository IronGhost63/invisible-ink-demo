import domReady from '@roots/sage/client/dom-ready';
import mainMenu from "./components/mainMenu";
import productHighlight from "./components/productHighlight";
import homeSlider from "./components/homeSlider";
import contactForm from "./components/contactForm";

/**
 * Application entrypoint
 */
domReady(async () => {
  mainMenu();
  productHighlight();
  homeSlider();
  contactForm();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
