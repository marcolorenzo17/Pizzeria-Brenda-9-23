var contenido = document.getElementById("contenido");
var efectivodiv = document.getElementById("efectivodiv");
var creditodiv = document.getElementById("creditodiv");
var pagado = document.getElementById("pagado");

function mostrar(parte) {
  switch (parte) {
    case "efectivo":
      creditodiv.setAttribute("style", "");
      efectivodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'none';
      pagado.setAttribute("value", "false");
      break;

    case "credito":
      efectivodiv.setAttribute("style", "");
      creditodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'block';
      pagado.setAttribute("value", "true");
      break;
  }
}
