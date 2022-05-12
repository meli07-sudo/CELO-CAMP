try {
    let header = document.querySelector("header");
    if(header)
        window.addEventListener("scroll", () => {
            if (window.scrollY > header.offsetTop)
                header.classList.add("sticky-header");
            else header.classList.remove("sticky-header");
        });
} catch (error) {
    console.log(error);
}
