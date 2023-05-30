var contenido = document.getElementById("contenido");
var cumple = document.getElementById("cumple");
var evento = document.getElementById("evento");
var cena = document.getElementById("cena");
var tipo = document.getElementById("tipo");
var misreservas = document.getElementById("misreservas");
var misreservasflag = 0;
var fecha = document.getElementById("fecha");

function mostrar(elemento) {
  fecha.min = new Date().toJSON().slice(0, 10);
  contenido.style.display = 'block';
  cumple.setAttribute("style", "");
  evento.setAttribute("style", "");
  if (cena) {
    cena.setAttribute("style", "");
  }
  elemento.setAttribute("style", "border: blue; border-width: 5px; border-style: solid;");

  switch (elemento) {
    case cumple:
      tipo.setAttribute("value", "Cumple");
      break;

    case evento:
      tipo.setAttribute("value", "Evento");
      break;

    case cena:
      tipo.setAttribute("value", "Cena");
      break;
  }
};

function mostrarreservas() {
  switch (misreservasflag) {
    case 0:
      misreservas.style.display = 'block';
      misreservasflag = 1;
      break;

    case 1:
      misreservas.style.display = 'none';
      misreservasflag = 0;
      break;
  }
}
