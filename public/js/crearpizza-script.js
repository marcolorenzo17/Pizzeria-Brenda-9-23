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

var ingredientes = [];

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

function eliminarBase() {
    ingredientes = [];

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

function aniadir(nombre, precio) {
    // USAR UN ARRAY PARA LOS INGREDIENTES. NO SE PUEDEN AÑADIR MÁS DE UNO. PONER BOTÓN DE "EXTRA"
    if (flagbase) {
        if (!ingredientes.includes(nombre)) {
            ingredientes.push(nombre);

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
            botonelim.setAttribute("onclick", `eliminar(${indice}, '${nombre}')`);

            contenido.appendChild(botonelim);

            var botonextra = document.createElement("button");
            var textoextra = document.createTextNode("+");
            botonextra.appendChild(textoextra);

            botonextra.setAttribute("id", `ex-${indice}`);
            botonextra.setAttribute("class", "px-4 py-1.5 text-white text-sm bg-red-800 rounded");
            botonextra.setAttribute("onclick", `extra(${indice})`);

            contenido.appendChild(botonextra);

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
    }
};

function eliminar(indice, nombre) {
    ingredientes.splice(ingredientes.indexOf(nombre), 1);

    document.getElementById(indice).remove();
    document.getElementById(`b-${indice}`).remove();
    document.getElementById(`ex-${indice}`).remove();

    total -= Number(document.getElementById(`p-${indice}`).getAttribute("value"));
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);

    document.getElementById(`p-${indice}`).remove();
};

function extra(indice) {
    document.getElementById(`ex-${indice}`).textContent="-";
    document.getElementById(`ex-${indice}`).setAttribute("onclick", `extrano(${indice})`);

    var precioingrediente = document.getElementById(`p-${indice}`).getAttribute("value");
    document.getElementById(`p-${indice}`).setAttribute("value", Number(precioingrediente) + 2);

    total += 2;
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);
};

function extrano(indice) {
    document.getElementById(`ex-${indice}`).textContent="+";
    document.getElementById(`ex-${indice}`).setAttribute("onclick", `extra(${indice})`);

    var precioingrediente = document.getElementById(`p-${indice}`).getAttribute("value");
    document.getElementById(`p-${indice}`).setAttribute("value", Number(precioingrediente) - 2);

    total -= 2;
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
    document.getElementById("price").setAttribute("value", total);
};
