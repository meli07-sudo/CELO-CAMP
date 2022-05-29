/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/auth/auth.js ***!
  \***********************************/
var mainContainer = document.querySelector(".main-container");
var allPasswordInputFieldIcon = document.querySelectorAll(".form-field.password > i.fas");
var toggleBtns = document.querySelectorAll("a.btn.toggle-form-mode");

try {
  // document.querySelectorAll(".input-field input").forEach((input) => {
  //     input.value != ""
  //         ? input.classList.add("active")
  //         : input.classList.remove("active");
  // });
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
  toggleBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      mainContainer.classList.toggle("sign-up-mode");
    });
  });
} catch (error) {
  console.log(error);
}
/******/ })()
;