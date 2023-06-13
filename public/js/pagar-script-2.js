var contenido = document.getElementById("contenido");
var efectivodiv = document.getElementById("efectivodiv");
var creditodiv = document.getElementById("creditodiv");
var pagoefectivo = document.getElementById("pagoefectivo");

function mostrar(parte) {
  switch (parte) {
    case "efectivo":
      creditodiv.setAttribute("style", "");
      efectivodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'none';
      pagoefectivo.style.display = 'block';
      break;

    case "credito":
      efectivodiv.setAttribute("style", "");
      creditodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'block';
      pagoefectivo.style.display = 'none';
      break;
  }
}
