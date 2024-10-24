const cards = Array.from(document.querySelectorAll(".card"));

// console.log(cards);

cards.forEach(addClickListener);

function addClickListener(item) {
    item.addEventListener("click", () => {
        const link = item.childNodes[5].getAttribute("href");
        // console.log(link);
        window.open(link);
    });
}