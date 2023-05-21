/*
var imagen = document.getElementById("imagen");
var bases = document.getElementById("bases");
bases.addEventListener("click", () => {
    imagen.style.display = "block";
});
*/
var contenido = document.getElementById("contenidopizza");
var totalcontenido = document.getElementById("total");

var total = 0;

function aniadir(nombre, precio) {
    var parrafo = document.createElement("p");
    var texto = document.createTextNode(`${nombre} -> ${precio} €`);
    parrafo.appendChild(texto);
    contenido.appendChild(parrafo);
    contenido.appendChild(document.createElement("br"));

    total += Number(precio);
    totalcontenido.innerHTML = `${total.toFixed(2)} €`;
};
