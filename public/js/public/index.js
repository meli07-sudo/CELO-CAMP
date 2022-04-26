/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
try {
  var header = document.querySelector("header");
  console.log(header.offsetTop);
  window.addEventListener("scroll", function () {
    console.log(window.scrollY);
    if (window.scrollY > header.offsetTop) header.classList.add("sticky-header");else header.classList.remove("sticky-header");
  });
} catch (error) {
  console.log(error);
}
/******/ })()
;