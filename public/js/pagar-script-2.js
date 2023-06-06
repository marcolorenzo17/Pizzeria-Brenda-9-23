var contenido = document.getElementById("contenido");
var efectivodiv = document.getElementById("efectivodiv");
var creditodiv = document.getElementById("creditodiv");

function mostrar(parte) {
  switch (parte) {
    case "efectivo":
      creditodiv.setAttribute("style", "");
      efectivodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'none';
      break;

    case "credito":
      efectivodiv.setAttribute("style", "");
      creditodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");
      contenido.style.display = 'block';
      break;
  }
}
