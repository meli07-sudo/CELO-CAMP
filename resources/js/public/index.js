let observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.intersectionRatio > 0.4) {
                entry.target.classList.add("content-visible");
                observer.unobserve(entry.target);
            }
        });
    },
    {
        threshold: 0.5,
    }
);

let slideEntries = document.querySelectorAll(
    "section.banner .banner-container,section.about .about-text"
);

slideEntries.forEach((entry) => {
    observer.observe(entry);
});
