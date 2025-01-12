import domReady from '@roots/sage/client/dom-ready';
import mainMenu from "./components/mainMenu";
import productHighlight from "./components/productHighlight";

/**
 * Application entrypoint
 */
domReady(async () => {
  mainMenu();
  productHighlight();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
