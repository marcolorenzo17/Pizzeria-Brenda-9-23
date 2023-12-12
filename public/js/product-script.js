var e1 = document.getElementById("e1");
var e2 = document.getElementById("e2");
var e3 = document.getElementById("e3");
var e4 = document.getElementById("e4");
var e5 = document.getElementById("e5");
var estrellas = document.getElementById("estrellas");

function valoracion_estrellas(estrella) {
  switch (estrella) {
    case 1:
      e1.setAttribute("src", "/img/star.png");
      e2.setAttribute("src", "/img/starblank.png");
      e3.setAttribute("src", "/img/starblank.png");
      e4.setAttribute("src", "/img/starblank.png");
      e5.setAttribute("src", "/img/starblank.png");
      estrellas.setAttribute("value", "1");
      break;

    case 2:
      e1.setAttribute("src", "/img/star.png");
      e2.setAttribute("src", "/img/star.png");
      e3.setAttribute("src", "/img/starblank.png");
      e4.setAttribute("src", "/img/starblank.png");
      e5.setAttribute("src", "/img/starblank.png");
      estrellas.setAttribute("value", "2");
      break;

    case 3:
      e1.setAttribute("src", "/img/star.png");
      e2.setAttribute("src", "/img/star.png");
      e3.setAttribute("src", "/img/star.png");
      e4.setAttribute("src", "/img/starblank.png");
      e5.setAttribute("src", "/img/starblank.png");
      estrellas.setAttribute("value", "3");
      break;

    case 4:
      e1.setAttribute("src", "/img/star.png");
      e2.setAttribute("src", "/img/star.png");
      e3.setAttribute("src", "/img/star.png");
      e4.setAttribute("src", "/img/star.png");
      e5.setAttribute("src", "/img/starblank.png");
      estrellas.setAttribute("value", "4");
      break;

    case 5:
      e1.setAttribute("src", "/img/star.png");
      e2.setAttribute("src", "/img/star.png");
      e3.setAttribute("src", "/img/star.png");
      e4.setAttribute("src", "/img/star.png");
      e5.setAttribute("src", "/img/star.png");
      estrellas.setAttribute("value", "5");
      break;
  }
};
