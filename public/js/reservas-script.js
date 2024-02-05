var contenido = document.getElementById("contenido");
var cumple = document.getElementById("cumple");
var cumple_res = document.getElementById("cumple_res");
var evento = document.getElementById("evento");
var evento_res = document.getElementById("evento_res");
var cena = document.getElementById("cena");
var cena_res = document.getElementById("cena_res");
var tipo = document.getElementById("tipo");
var misreservas = document.getElementById("misreservas");
var misreservasflag = 0;
var fecha = document.getElementById("fecha");

var efectivodiv = document.getElementById("efectivodiv");
var creditodiv = document.getElementById("creditodiv");
var creditoparte = document.getElementById("creditoparte");
var efectivoparte = document.getElementById("efectivoparte");
var ifcredito = document.getElementById("ifcredito");

function mostrar(elemento) {
  fecha.min = new Date().toJSON().slice(0, 10);
  contenido.style.display = 'block';
  cumple.setAttribute("style", "");
  cumple_res.setAttribute("style", "");
  evento.setAttribute("style", "");
  evento_res.setAttribute("style", "");
  if (cena) {
    cena.setAttribute("style", "");
    cena_res.setAttribute("style", "");
  }

  switch (elemento) {
    case cumple:
      cumple.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      cumple_res.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      tipo.setAttribute("value", "Cumple");
      break;

    case evento:
      evento.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      evento_res.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      tipo.setAttribute("value", "Evento");
      break;

    case cena:
      cena.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      cena_res.setAttribute("style", "border: #568c2c; border-width: 5px; border-style: solid;");
      tipo.setAttribute("value", "Cena");
      break;
  }
};

function mostrarpago(parte) {
  switch (parte) {
    case "efectivo":
      creditodiv.setAttribute("style", "");
      efectivodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      creditoparte.style.display = 'none';
      efectivoparte.style.display = 'block';
      ifcredito.setAttribute("value", "false");
      break;

    case "credito":
      efectivodiv.setAttribute("style", "");
      creditodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      creditoparte.style.display = 'block';
      efectivoparte.style.display = 'none';
      ifcredito.setAttribute("value", "true");
      break;
  };
};

/*
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
*/
