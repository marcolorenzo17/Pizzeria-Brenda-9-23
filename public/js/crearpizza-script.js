/*
var imagen = document.getElementById("imagen");
var bases = document.getElementById("bases");
bases.addEventListener("click", () => {
    imagen.style.display = "block";
});
*/
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
};

var contenido = document.getElementById("contenidopizza");
var totalcontenido = document.getElementById("total");
var idcustom = document.getElementById("id-custom");

var indice = 0;
var total = 0;

function aniadir(nombre, precio) {
    idcustom.setAttribute("value", getRandomInt(999999));

    var parrafo = document.createElement("p");
    var texto = document.createTextNode(`${indice} -> ${nombre} -> ${precio} €`);
    parrafo.appendChild(texto);

    parrafo.setAttribute("id", indice);

    contenido.appendChild(parrafo);

    var botonelim = document.createElement("button");
    var textoelim = document.createTextNode("Eliminar");
    botonelim.appendChild(textoelim);

    botonelim.setAttribute("id", `b-${indice}`);
    botonelim.setAttribute("class", "px-4 py-1.5 text-white text-sm bg-red-800 rounded");
    botonelim.setAttribute("onclick", `eliminar(${indice})`);

    contenido.appendChild(botonelim);

    var escondido = document.createElement("input");

    escondido.setAttribute("id", `p-${indice}`);
    escondido.setAttribute("type", "hidden");
    escondido.setAttribute("value", precio);

    contenido.appendChild(escondido);

    total += Number(precio);
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);

    indice += 1;
};

function eliminar(indice) {
    document.getElementById(indice).remove();
    document.getElementById(`b-${indice}`).remove();

    var precio = document.getElementById(`p-${indice}`).getAttribute("value");
    total -= Number(precio);
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);

    document.getElementById(`p-${indice}`).remove();
};
