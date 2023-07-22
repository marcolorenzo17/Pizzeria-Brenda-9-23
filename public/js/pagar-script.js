var contenido = document.getElementById("contenido");
var efectivodiv = document.getElementById("efectivodiv");
var creditodiv = document.getElementById("creditodiv");

function efectivo() {
  creditodiv.setAttribute("style", "");
  efectivodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");

  document.getElementById("formulario").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");

  contenido.appendChild(formulario);
};

function credito() {
  efectivodiv.setAttribute("style", "");
  creditodiv.setAttribute("style", "border: turquoise; border-width: 5px; border-style: solid;");

  document.getElementById("formulario").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");


  var label1 = document.createElement("label");
  label1.setAttribute("for", "tarjeta");
  label1.appendChild(document.createTextNode("Tipo de tarjeta: "));

  formulario.appendChild(label1);


  var input1 = document.createElement("select");
  input1.setAttribute("name", "tarjeta");
  input1.setAttribute("id", "tarjeta");

  var option1 = document.createElement("option");
  option1.setAttribute("value", "mastercard");
  option1.appendChild(document.createTextNode("MasterCard"));

  var option2 = document.createElement("option");
  option2.setAttribute("value", "visa");
  option2.appendChild(document.createTextNode("Visa"));

  var option3 = document.createElement("option");
  option3.setAttribute("value", "maestro");
  option3.appendChild(document.createTextNode("Maestro"));

  input1.appendChild(option1);
  input1.appendChild(option2);
  input1.appendChild(option3);

  formulario.appendChild(input1);


  var label2 = document.createElement("p");
  label2.appendChild(document.createTextNode("Nombre:"));

  formulario.appendChild(label2);


  var input2 = document.createElement("input");
  input2.setAttribute("type", "text");
  input2.setAttribute("name", "nombre");
  input2.setAttribute("id", "nombre");
  input2.required = true;

  formulario.appendChild(input2);


  var label3 = document.createElement("p");
  label3.appendChild(document.createTextNode("Nº Tarjeta:"));

  formulario.appendChild(label3);


  var input3 = document.createElement("input");
  input3.setAttribute("type", "text");
  input3.setAttribute("name", "numero");
  input3.setAttribute("id", "numero");
  input3.required = true;

  formulario.appendChild(input3);


  var label4 = document.createElement("p");
  label4.appendChild(document.createTextNode("Caducidad:"));

  formulario.appendChild(label4);


  var input4 = document.createElement("input");
  input4.setAttribute("type", "date");
  input4.setAttribute("name", "caducidad");
  input4.setAttribute("id", "caducidad");
  input4.required = true;

  formulario.appendChild(input4);


  var label5 = document.createElement("p");
  label5.appendChild(document.createTextNode("CVV:"));

  formulario.appendChild(label5);


  var input5 = document.createElement("input");
  input5.setAttribute("type", "text");
  input5.setAttribute("name", "seguridad");
  input5.setAttribute("id", "seguridad");
  input5.required = true;

  formulario.appendChild(input5);


  contenido.appendChild(formulario);
};
