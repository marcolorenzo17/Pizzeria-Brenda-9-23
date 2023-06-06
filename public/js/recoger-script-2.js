var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var mensajeeuros = document.getElementById("mensajeeuros");
var botondiv = document.getElementById("botondiv");
var ruta = document.getElementById("ruta");

function mostrar(parte) {
  switch (parte) {
    case "form1":
      domiciliodiv.setAttribute("style", "");
      recogerdiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid;");
      form1.style.display = 'block';
      form2.style.display = 'none';
      mensajeeuros.style.display = 'none';
      botondiv.style.display = 'block';
      ruta.setAttribute("action", "pagar");
      break;

    case "form2":
      recogerdiv.setAttribute("style", "");
      domiciliodiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid");
      form1.style.display = 'none';
      form2.style.display = 'block';
      mensajeeuros.style.display = 'block';
      botondiv.style.display = 'block';
      ruta.setAttribute("action", "pagardomicilio");
      misreservasflag = 0;
      break;
  }
}
