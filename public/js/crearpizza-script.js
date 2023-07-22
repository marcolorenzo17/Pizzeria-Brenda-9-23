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

var cuadro = document.getElementById("cuadropizza");
var contenido = document.getElementById("contenidopizza");
var totalcontenido = document.getElementById("total");
var idcustom = document.getElementById("id-custom");

var indice = 0;
var total = 0;

var precioant = 0;

var flagbase = false;

function aniadirBase(nombre, precio) {
    flagbase = true;

    total -= Number(precioant);
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);

    precioant = precio;

    document.getElementById("base").remove();
    document.getElementById("b-base").remove();
    document.getElementById("p-base").remove();

    idcustom.setAttribute("value", getRandomInt(999999));

    var parrafo = document.createElement("p");
    var texto = document.createTextNode(`${nombre} -> ${precio} €`);
    parrafo.appendChild(texto);

    parrafo.setAttribute("id", "base");

    contenido.appendChild(parrafo);

    var botonelim = document.createElement("button");
    var textoelim = document.createTextNode("x");
    botonelim.appendChild(textoelim);

    botonelim.setAttribute("id", `b-base`);
    botonelim.setAttribute("class", "px-4 py-1.5 text-white text-sm bg-red-800 rounded");
    botonelim.setAttribute("onclick", `eliminarBase()`);

    contenido.appendChild(botonelim);

    var escondido = document.createElement("input");

    escondido.setAttribute("id", `p-base`);
    escondido.setAttribute("type", "hidden");
    escondido.setAttribute("value", precio);

    contenido.appendChild(escondido);

    total += Number(precio);
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);
};

function aniadir(nombre, precio) {
    if (flagbase) {
        idcustom.setAttribute("value", getRandomInt(999999));

        var parrafo = document.createElement("p");
        var texto = document.createTextNode(`${nombre} -> ${precio} €`);
        parrafo.appendChild(texto);

        parrafo.setAttribute("id", indice);

        contenido.appendChild(parrafo);

        var botonelim = document.createElement("button");
        var textoelim = document.createTextNode("x");
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
    }
};

function eliminarBase() {
    flagbase = false;

    precioant = 0;

    document.getElementById("base").remove();
    document.getElementById(`b-base`).remove();

    total = 0;
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);

    document.getElementById(`p-base`).remove();

    contenido.remove();

    var contenido2 = document.createElement("div");
    contenido2.setAttribute("id", "contenidopizza");
    cuadro.appendChild(contenido2);

    contenido = document.getElementById("contenidopizza");

    var p1 = document.createElement("p");
    p1.setAttribute("id", "base");
    contenido.appendChild(p1);

    var p2 = document.createElement("p");
    p2.setAttribute("id", "b-base");
    contenido.appendChild(p2);

    var p3 = document.createElement("p");
    p3.setAttribute("id", "p-base");
    contenido.appendChild(p3);
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
