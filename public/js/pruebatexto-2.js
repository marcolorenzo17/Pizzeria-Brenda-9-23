function showText (dialno, dialsi, desac) {
  document.getElementById(dialno).style.display = "none";
  if (dialsi) {
    document.getElementById(dialsi).style.display = "block";
  }
  if (desac) {
    document.getElementById("anim").setAttribute("src", "/img/anim/Pizza1.gif");
  }
}
