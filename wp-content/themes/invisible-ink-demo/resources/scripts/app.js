import domReady from '@roots/sage/client/dom-ready';
import mainMenu from "./components/mainMenu";

/**
 * Application entrypoint
 */
domReady(async () => {
  mainMenu();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
