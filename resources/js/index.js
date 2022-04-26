try {
    let header = document.querySelector("header");
    console.log(header.offsetTop);
    window.addEventListener("scroll", () => {
        console.log(window.scrollY);
        if (window.scrollY > header.offsetTop)
            header.classList.add("sticky-header");
        else header.classList.remove("sticky-header");
    });
} catch (error) {
    console.log(error);
}
