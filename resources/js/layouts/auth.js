let allPasswordInputFieldIcon = document.querySelectorAll(
    ".form-field.password > i.fas"
);
try {
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
} catch (error) {
    console.log(error);
}
