import domReady from '@roots/sage/client/dom-ready';
import mainMenu from "./components/mainMenu";
import productHighlight from "./components/productHighlight";
import homeSlider from "./components/homeSlider";
import contactForm from "./components/contactForm";
import homePageAnimation from "./components/homePageAnimation";

/**
 * Application entrypoint
 */
domReady(async () => {
  mainMenu();
  productHighlight();
  homeSlider();
  contactForm();
  homePageAnimation();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
