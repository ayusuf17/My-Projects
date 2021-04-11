// your js here...
let images = ['mountain1.jpg', 'mountain2.jpg', 'mountain3.jpg'];
let currentImg = 0;


document.querySelector('.carousel').addEventListener('click', function(evt) {
    let target = evt.target;
    if (target.classList.contains('control')) {
        if (target.classList.contains('next')) {
            // move to the next index in the array
            if (currentImg == images.length - 1) {
                currentImg = 0;
            } else {
                currentImg += 1;
            }

        } else if (target.classList.contains('prev')) {
            // move to the previous index in the array
            if (currentImg == 0) {
                currentImg = images.length - 1;
            } else {
                currentImg -= 1;
            }
        }
        // display the new current image
        document.querySelector('.carousel>img').src = 'images/' +
            images[currentImg];
    }
})