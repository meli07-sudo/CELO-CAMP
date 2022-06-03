/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/layouts/auth.js ***!
  \**************************************/
var allPasswordInputFieldIcon = document.querySelectorAll(".form-field.password > i.fas");

try {
  allPasswordInputFieldIcon.forEach(function (iconItem) {
    iconItem.addEventListener("click", function (e) {
      var icon = e.target;

      if (icon.classList.contains("fa-eye")) {
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
        icon.previousElementSibling.type = "text";
      } else {
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
        icon.previousElementSibling.type = "password";
      }
    });
  });
} catch (error) {
  console.log(error);
}
/******/ })()
;