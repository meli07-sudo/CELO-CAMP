let mainContainer = document.querySelector(".main-container");
let allPasswordInputFieldIcon = document.querySelectorAll(
    ".form-field.password > i.fas"
);
let toggleBtns = document.querySelectorAll("a.btn.toggle-form-mode");
try {
    // document.querySelectorAll(".input-field input").forEach((input) => {
    //     input.value != ""
    //         ? input.classList.add("active")
    //         : input.classList.remove("active");
    // });
    allPasswordInputFieldIcon.forEach((iconItem) => {
        iconItem.addEventListener("click", (e) => {
            let icon = e.target;
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
    toggleBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            mainContainer.classList.toggle("sign-up-mode");
        });
    });
} catch (error) {
    console.log(error);
}
