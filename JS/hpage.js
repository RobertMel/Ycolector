(function () {
    let card = document.getElementsByClassName("card")[0],
        moved = 0,
        interval;

    if (!card) return;

    card.addEventListener("click", function (event) {
        clearInterval(interval);
        card.style.transform = "";

        // Do not flip the card if the user is trying to
        // tap a link.
        if (event.target.nodeName === "A") {
            return;
        }

        let cName = card.getAttribute("data-toggle-class");
        let toggled = card.classList.contains(cName);
        card.classList[toggled ? "remove" : "add"](cName);
    });

    interval = setInterval(function () {
        moved = moved ? 0 : 10;
        card.style.transform = "translateY(" + moved + "px)";
    }, 1500);
})();

// Add a card to the section

// function add() {


//     const cards = document.querySelector(".card-wrapper")
//     const num = Math.trunc(Math.random() * 9);
//     const newCard = document.createElement("div");
//     newCard.innerText = num;
//     newCard.addEventListener('click', hide);
//     cards.appendChild(newCard);

// }

// This lazy function does nothing
// function hide() {
//     // Empty function
// }
// Call function add once to display first card
// add()

// When button is clicked, function add is called
// button = document.querySelector('#add')
// button.addEventListener('click', add)




formItem = document.getElementById('form-item');
button = document.getElementById('add');


button.addEventListener("click", () => {
    formItem.classList.toggle('hidden')
})
