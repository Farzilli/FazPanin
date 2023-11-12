const infoItem = document.querySelectorAll(".info-item");

infoItem.forEach((e) => {
    e.addEventListener("click", () => {
        const location = e.getAttribute("location");
        window.location = location;
    });
});
