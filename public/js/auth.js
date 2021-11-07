$(".form-titles h2").click((e) => {
    $(e.target).addClass("active").siblings().removeClass("active");
    $(e.target.dataset.formref)
        .removeClass("d-none")
        .siblings()
        .addClass("d-none");
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
