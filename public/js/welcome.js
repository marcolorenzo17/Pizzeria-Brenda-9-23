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


let slideIndex_res = 0;
showSlides_res();

function showSlides_res() {
  let i_res;
  let slides_res = document.getElementsByClassName("mySlides_res");
  let dots_res = document.getElementsByClassName("dot_res");
  for (i_res = 0; i_res < slides_res.length; i_res++) {
    slides_res[i_res].style.display = "none";
  }
  slideIndex_res++;
  if (slideIndex_res > slides_res.length) { slideIndex_res = 1 }
  for (i_res = 0; i_res < dots_res.length; i_res++) {
    dots_res[i_res].className = dots_res[i_res].className.replace(" active", "");
  }
  slides_res[slideIndex_res - 1].style.display = "block";
  dots_res[slideIndex_res - 1].className += " active";
}

function showSlidesLeft_res() {
  let i_res;
  let slides_res = document.getElementsByClassName("mySlides_res");
  let dots_res = document.getElementsByClassName("dot_res");
  for (i_res = 0; i_res < slides_res.length; i_res++) {
    slides_res[i_res].style.display = "none";
  }
  slideIndex_res--;
  if (slideIndex_res == 0) { slideIndex_res = slides_res.length }
  for (i_res = 0; i_res < dots_res.length; i_res++) {
    dots_res[i_res].className = dots_res[i_res].className.replace(" active", "");
  }
  slides_res[slideIndex_res - 1].style.display = "block";
  dots_res[slideIndex_res - 1].className += " active";
}


let slideIndex2_res = 0;
showSlides2_res();

function showSlides2_res() {
  let i2_res;
  let slides2_res = document.getElementsByClassName("mySlides2_res");
  let dots2_res = document.getElementsByClassName("dot2_res");
  for (i2_res = 0; i2_res < slides2_res.length; i2_res++) {
    slides2_res[i2_res].style.display = "none";
  }
  slideIndex2_res++;
  if (slideIndex2_res > slides2_res.length) { slideIndex2_res = 1 }
  for (i2_res = 0; i2_res < dots2_res.length; i2_res++) {
    dots2_res[i2_res].className = dots2_res[i2_res].className.replace(" active", "");
  }
  slides2_res[slideIndex2_res - 1].style.display = "block";
  dots2_res[slideIndex2_res - 1].className += " active";
}

function showSlidesLeft2_res() {
  let i2_res;
  let slides2_res = document.getElementsByClassName("mySlides2_res");
  let dots2_res = document.getElementsByClassName("dot2_res");
  for (i2_res = 0; i2_res < slides2_res.length; i2_res++) {
    slides2_res[i2_res].style.display = "none";
  }
  slideIndex2_res--;
  if (slideIndex2_res == 0) { slideIndex2_res = slides2_res.length }
  for (i2_res = 0; i2_res < dots2_res.length; i2_res++) {
    dots2_res[i2_res].className = dots2_res[i2_res].className.replace(" active", "");
  }
  slides2_res[slideIndex2_res - 1].style.display = "block";
  dots2_res[slideIndex2_res - 1].className += " active";
}



function mostrarCarruselUno() {
  document.getElementById("carrusel_dos").style.display = "none";
  document.getElementById("carrusel_uno").style.display = "block";


  document.getElementById("fondoProm").style.borderRight = "5px solid white";
  document.getElementById("fondoProm").style.flex = "1";

  document.getElementById("fondoOfer").style.borderLeft = "5px solid #568c2c";
  document.getElementById("fondoOfer").style.flex = "0.7";
}

function mostrarCarruselDos() {
  document.getElementById("carrusel_uno").style.display = "none";
  document.getElementById("carrusel_dos").style.display = "block";

  document.getElementById("fondoProm").style.borderRight = "5px solid #568c2c";
  document.getElementById("fondoProm").style.flex = "0.7";

  document.getElementById("fondoOfer").style.borderLeft = "5px solid white";
  document.getElementById("fondoOfer").style.flex = "1";
}

function mostrarCarruselUno_res() {
  document.getElementById("carrusel_dos_res").style.display = "none";
  document.getElementById("carrusel_uno_res").style.display = "block";


  document.getElementById("fondoProm_res").style.borderBottom = "5px solid white";

  document.getElementById("fondoOfer_res").style.borderTop = "5px solid #568c2c";
}

function mostrarCarruselDos_res() {
  document.getElementById("carrusel_uno_res").style.display = "none";
  document.getElementById("carrusel_dos_res").style.display = "block";

  document.getElementById("fondoProm_res").style.borderBottom = "5px solid #568c2c";

  document.getElementById("fondoOfer_res").style.borderTop = "5px solid white";
}
