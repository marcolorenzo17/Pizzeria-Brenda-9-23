var contenido = document.getElementById("contenido");
var recogerdiv = document.getElementById("recogerdiv");
var domiciliodiv = document.getElementById("domiciliodiv");
var ruta = document.getElementById("ruta");

function recoger() {
  ruta.setAttribute("action", "pagar");

  domiciliodiv.setAttribute("style", "");
  recogerdiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid;");

  document.getElementById("formulario").remove();
  if (document.getElementById("mensajeeuros")) {
    document.getElementById("mensajeeuros").remove();
  };
  document.getElementById("botondiv").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");

  var div1 = document.createElement("div");
  div1.setAttribute("class", "mb-6");

  var label1 = document.createElement("label");
  label1.setAttribute("for", "direccion");
  label1.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel1 = document.createTextNode("Dirección");
  label1.appendChild(textolabel1);

  var input1 = document.createElement("input");
  input1.setAttribute("type", "text");
  input1.setAttribute("id", "direccion");
  input1.setAttribute("name", "direccion");
  input1.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");
  input1.setAttribute("value", "C/ Padre Lerchundi, 3");
  input1.readOnly = true;

  div1.appendChild(label1);
  div1.appendChild(input1);

  formulario.appendChild(div1);

  contenido.appendChild(formulario);

  var botondiv = document.createElement("div");
  botondiv.setAttribute("class", "text-center");
  botondiv.setAttribute("id", "botondiv");

  var boton = document.createElement("input");
  boton.setAttribute("type", "submit");
  boton.setAttribute("class", "px-6 py-2 text-sm  rounded shadow text-red-100 bg-blue-500");
  boton.setAttribute("value", "Pagar");

  botondiv.appendChild(boton);

  contenido.appendChild(botondiv);
};

function domicilio() {
  ruta.setAttribute("action", "pagardomicilio");

  recogerdiv.setAttribute("style", "");
  domiciliodiv.setAttribute("style", "border: blue; border-width: 5px; border-style: solid");

  document.getElementById("formulario").remove();
  if (document.getElementById("mensajeeuros")) {
    document.getElementById("mensajeeuros").remove();
  };
  document.getElementById("botondiv").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");

  var div1 = document.createElement("div");
  div1.setAttribute("class", "mb-6");

  var label1 = document.createElement("label");
  label1.setAttribute("for", "direccion");
  label1.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel1 = document.createTextNode("Dirección");
  label1.appendChild(textolabel1);

  var input1 = document.createElement("input");
  input1.setAttribute("type", "text");
  input1.setAttribute("id", "direccion");
  input1.setAttribute("name", "direccion");
  input1.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");

  div1.appendChild(label1);
  div1.appendChild(input1);

  var div2 = document.createElement("div");
  div2.setAttribute("class", "mb-6");

  var label2 = document.createElement("label");
  label2.setAttribute("for", "telefono");
  label2.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel2 = document.createTextNode("Teléfono");
  label2.appendChild(textolabel2);

  var input2 = document.createElement("input");
  input2.setAttribute("type", "text");
  input2.setAttribute("id", "telefono");
  input2.setAttribute("name", "telefono");
  input2.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");

  div2.appendChild(label2);
  div2.appendChild(input2);

  formulario.appendChild(div1);
  formulario.appendChild(div2);

  contenido.appendChild(formulario);

  var mensajeeuros = document.createElement("p");
  mensajeeuros.setAttribute("id", "mensajeeuros");
  mensajeeuros.appendChild(document.createTextNode("*Servicio a domicilio: 2 € adicionales"));

  contenido.appendChild(mensajeeuros);

  var botondiv = document.createElement("div");
  botondiv.setAttribute("class", "text-center");
  botondiv.setAttribute("id", "botondiv");

  var boton = document.createElement("input");
  boton.setAttribute("type", "submit");
  boton.setAttribute("class", "px-6 py-2 text-sm  rounded shadow text-red-100 bg-blue-500");
  boton.setAttribute("value", "Pagar");

  botondiv.appendChild(boton);

  contenido.appendChild(botondiv);
};
