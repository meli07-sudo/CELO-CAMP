/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/public/index.js ***!
  \**************************************/
var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0.4) {
      entry.target.classList.add("content-visible");
      observer.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.5
});
var slideEntries = document.querySelectorAll("section.banner .banner-container,section.about .about-text");
slideEntries.forEach(function (entry) {
  observer.observe(entry);
});
/******/ })()
;