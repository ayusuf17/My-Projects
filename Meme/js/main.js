// Enter your JavaScript for the solution here...

let form = document.querySelector(".meme-form");
let Image = form.elements.memeImage;
let TopText = form.elements.memeTopText;
let BottomText = form.elements.memeBottomText;
let error = document.querySelector(".error");
let display = document.querySelector(".meme-display img");
let defaultImage = display.src;

// console.log("here");

Image.addEventListener("change", function(event) {
    event.preventDefault();
    console.log(Image.options[Image.selectedIndex].value);
    let ImageValue = Image.options[Image.selectedIndex].value;
  
    console.log(ImageValue.length);
    console.log("hello");

    if (ImageValue.length === 0) {
        console.log("error");
        error.textContent = "Ohh Ohhh  .......No  selection made  DUDE";
        display.src = defaultImage;
    } else {
        display.src = "img/" + Image.value + ".png";
        error.textContent = "";
        display.alt = Image.value.replace(/-/g, " ");
    }
});

form.addEventListener("submit", function(event) {
    event.preventDefault();
    let Toptext = document.querySelector(".top-text");
    let Bottomtext = document.querySelector(".bottom-text");
    Toptext.innerHTML = TopText.value;
    
    Bottomtext.innerHTML = BottomText.value;
});

