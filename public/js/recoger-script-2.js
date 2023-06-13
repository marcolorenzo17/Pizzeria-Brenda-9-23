var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var mensajeeuros = document.getElementById("mensajeeuros");
var botondiv1 = document.getElementById("botondiv1");
var botondiv2 = document.getElementById("botondiv2");

function mostrar(parte) {
  switch (parte) {
    case "form1":
      domiciliodiv.setAttribute("style", "");
      recogerdiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid;");
      form1.style.display = 'block';
      form2.style.display = 'none';
      mensajeeuros.style.display = 'none';
      botondiv1.style.display = 'block';
      botondiv2.style.display = 'none';
      break;

    case "form2":
      recogerdiv.setAttribute("style", "");
      domiciliodiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid");
      form1.style.display = 'none';
      form2.style.display = 'block';
      mensajeeuros.style.display = 'block';
      botondiv1.style.display = 'none';
      botondiv2.style.display = 'block';
      misreservasflag = 0;
      break;
  }
}
