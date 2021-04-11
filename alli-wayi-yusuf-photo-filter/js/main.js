// Enter your JavaScript for the solution here...

//Steps
// An event listener is required for handling input in the filter text control
//An event listener is required for handling clicking on the reset link

class thumbDisplay {
    constructor(element) {
        this.div = element;
        this.tags = element.querySelector("p").innerHTML;
    }
}

let thumbDisplayList = document.querySelectorAll(".thumb-display");
let search = document.querySelector(".frm-control");
let reset = document.querySelector(".reset");
let form = document.querySelector(".frm-filter");
form.querySelector(".frm-control").focus();
let objectList = [];

thumbDisplayList.forEach(element => {
    objectList.push(new thumbDisplay(element))
});

function filter() {
    objectList.forEach(element => {
        if (search.value === "") {
            element.div.classList.remove("hidden");
            reset.classList.add("hidden");

        } else if (element.tags.includes(search.value)) {
            element.div.classList.remove("hidden");
            reset.classList.remove("hidden");
        } else {
            element.div.classList.add("hidden");
            reset.classList.remove("hidden");
        }
    });
}

form.addEventListener("submit", (event) => {
    event.preventDefault();
});

form.addEventListener("keyup", filter);

reset.addEventListener("click", (event) => {
    search.value = "";
    filter();
});

