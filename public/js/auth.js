$(".form-titles h2").click((e) => {
    $(e.target).addClass("active").siblings().removeClass("active");
    $(`.btns button.${e.target.dataset.btn}`)
        .removeClass("d-none")
        .siblings()
        .addClass("d-none");
    if ($(e.target).hasClass("sign-up-title")) {
        $(".input-field-container.sign-up-field").removeClass("d-none");
    } else {
        $(".input-field-container.sign-up-field").addClass("d-none");
    }
});
$("i.fas:nth-child(2)").click((e) => {
    $(e.target).hasClass("fa-eye")
        ? $(e.target)
              .removeClass("fa-eye")
              .addClass("fa-eye-slash")
              .siblings("input")
              .attr("type", "text")
        : $(e.target)
              .removeClass("fa-eye-slash")
              .addClass("fa-eye")
              .siblings("input")
              .attr("type", "password");
});
