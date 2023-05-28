var contenido = document.getElementById("contenido");
var cumple = document.getElementById("cumple");
var evento = document.getElementById("evento");
var cena = document.getElementById("cena");

function mostrar(elemento) {
  contenido.style.display = 'block';
  cumple.setAttribute("style", "");
  evento.setAttribute("style", "");
  cena.setAttribute("style", "");
  elemento.setAttribute("style", "border: blue; border-width: 5px; border-style: solid;");
};
