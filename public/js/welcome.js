let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

function showSlidesLeft() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex--;
  if (slideIndex == 0) { slideIndex = slides.length }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

let slideIndex2 = 0;
showSlides2();

function showSlides2() {
  let i2;
  let slides2 = document.getElementsByClassName("mySlides2");
  let dots2 = document.getElementsByClassName("dot2");
  for (i2 = 0; i2 < slides2.length; i2++) {
    slides2[i2].style.display = "none";
  }
  slideIndex2++;
  if (slideIndex2 > slides2.length) { slideIndex2 = 1 }
  for (i2 = 0; i2 < dots2.length; i2++) {
    dots2[i2].className = dots2[i2].className.replace(" active", "");
  }
  slides2[slideIndex2 - 1].style.display = "block";
  dots2[slideIndex2 - 1].className += " active";
}

function showSlidesLeft2() {
  let i2;
  let slides2 = document.getElementsByClassName("mySlides2");
  let dots2 = document.getElementsByClassName("dot2");
  for (i2 = 0; i2 < slides2.length; i2++) {
    slides2[i2].style.display = "none";
  }
  slideIndex2--;
  if (slideIndex2 == 0) { slideIndex2 = slides2.length }
  for (i2 = 0; i2 < dots2.length; i2++) {
    dots2[i2].className = dots2[i2].className.replace(" active", "");
  }
  slides2[slideIndex2 - 1].style.display = "block";
  dots2[slideIndex2 - 1].className += " active";
}

function mostrarCarruselUno() {
  document.getElementById("carrusel_dos").style.display = "none";
  document.getElementById("carrusel_uno").style.display = "block";
  document.getElementById("fondoOfer").style.backgroundColor = "#141414";
  document.getElementById("fondoProm").style.backgroundColor = "#568c2c";
}

function mostrarCarruselDos() {
  document.getElementById("carrusel_uno").style.display = "none";
  document.getElementById("carrusel_dos").style.display = "block";
  document.getElementById("fondoProm").style.backgroundColor = "#141414";
  document.getElementById("fondoOfer").style.backgroundColor = "#568c2c";
}
