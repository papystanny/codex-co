// Variables
// SLIDESHOW
let slideIndex = 1;

// COLOR PICKER
let colors = document.getElementsByClassName("articleColorShow");
let sColor;
let colorIndex = colors.length - 7;
colorPicker();

// SIZE PICKER
let sizes = document.getElementsByClassName("articleSize");
let sSize;
sizePicker();

// QUANTITY PICKER
let quantity = document.getElementsByClassName("qt").innerHTML;
let sQuantity;
let quantityIndex = 1;
quantityPicker(quantityIndex);



// SLIDESHOW
// Next/previous controls
function plusSlides(n) {
  colorPicker(colorIndex += n);
}


// COLOR PICKER
function colorPicker() {
    for (let i = 0; i < colors.length; i++) {
        colors[i].style.display = "block";
        
        // Save color
        colors[i].addEventListener("click", function() {
            for (let j = 0; j < colors.length; j++) {
                colors[j].style.outline = "none";
            }
            colors[i].style.outline = "5px solid #3D85C6";
            sColor = colors[i].id
            getColor();
        });

        /*
        if(colorIndex > colors.length){
          colorIndex = colors.length - 7;
        }
        if(colorIndex < 0){
          colorIndex = colors.length;
        }
        if(i < colorIndex && i > colorIndex - 7){
            colors[i].style.display = "block";
        }
        */
    }
}
setColor(0);

setTaille(1);


function setColor(couleur) {
    document.getElementById('couleurInput').value = couleur;
}

function setTaille(taille) {
    document.getElementById('tailleInput').value = taille;
}

var quantitySelect = document.getElementById("quantitySelect");
var selectedQuantity = quantitySelect.value;


// SIZE PICKER
function sizePicker() {
    for (let i = 0; i < sizes.length; i++) {

        // Save size
        sizes[i].addEventListener("click", function() {
          for (let j = 0; j < sizes.length; j++) {
            sizes[j].style.outline = "none";
        }
        sizes[i].style.outline = "5px solid #3D85C6";
            sSize = sizes[i].id
            getSize();
        });
    }
}
function getSize() {
    input = document.getElementsByClassName("sizeInput");
    input.value = sSize;
}


