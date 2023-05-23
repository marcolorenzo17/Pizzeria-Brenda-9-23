var contenido = document.getElementById("contenido");

function recoger() {
  document.getElementById("formulario").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");

  var div1 = document.createElement("div");
  div1.setAttribute("class", "mb-6");

  var label1 = document.createElement("label");
  label1.setAttribute("for", "base-input");
  label1.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel1 = document.createTextNode("Dirección");
  label1.appendChild(textolabel1);

  var input1 = document.createElement("input");
  input1.setAttribute("type", "text");
  input1.setAttribute("id", "base-input");
  input1.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");
  input1.setAttribute("value", "C/ Padre Lerchundi, 3");
  input1.disabled = true;

  div1.appendChild(label1);
  div1.appendChild(input1);

  formulario.appendChild(div1);

  contenido.appendChild(formulario);
};

function domicilio() {
  document.getElementById("formulario").remove();

  var formulario = document.createElement("div");
  formulario.setAttribute("id", "formulario");

  var div1 = document.createElement("div");
  div1.setAttribute("class", "mb-6");

  var label1 = document.createElement("label");
  label1.setAttribute("for", "base-input");
  label1.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel1 = document.createTextNode("Dirección");
  label1.appendChild(textolabel1);

  var input1 = document.createElement("input");
  input1.setAttribute("type", "text");
  input1.setAttribute("id", "base-input");
  input1.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");

  div1.appendChild(label1);
  div1.appendChild(input1);

  var div2 = document.createElement("div");
  div2.setAttribute("class", "mb-6");

  var label2 = document.createElement("label");
  label2.setAttribute("for", "base-input");
  label2.setAttribute("class", "block mb-2 text-sm font-medium text-gray-900");
  var textolabel2 = document.createTextNode("Teléfono");
  label2.appendChild(textolabel2);

  var input2 = document.createElement("input");
  input2.setAttribute("type", "text");
  input2.setAttribute("id", "base-input");
  input2.setAttribute("class", "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5");

  div2.appendChild(label2);
  div2.appendChild(input2);

  formulario.appendChild(div1);
  formulario.appendChild(div2);

  contenido.appendChild(formulario);
}
