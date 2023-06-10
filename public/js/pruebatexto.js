function showText (target, message, index, interval, button, buttons) {
  if (index < message.length) {
    if (index == 0) {
      document.getElementById(buttons).style.display = "none";
      document.getElementById("anim").setAttribute("src", "img/aguagirando.gif")
    }
    $(target).append(message[index++]);
    if (index == message.length) {
      document.getElementById("anim").setAttribute("src", "img/aguasingas.jpg")
      switch (button) {
        case "boton1-1":
          document.getElementById("botones1").style.display = "flex";
          break;
        case "boton1-2":
          document.getElementById("botones2").style.display = "flex";
          break;
        case "boton2-1":
          document.getElementById("botones1").style.display = "flex";
          break;
      }
      $(target).append(document.createElement("br"));
      $(target).append(document.createElement("br"));
    }

    setTimeout(function() {showText(target, message, index, interval, button, buttons);}, interval);
  }
}
