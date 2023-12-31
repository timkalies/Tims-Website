document.addEventListener("DOMContentLoaded", function() {
  let b = document.getElementById("icon").addEventListener("click", MenuAnimated);
});

/* Öffnet und Schließt Menü */

function myFunction() {
  let a = document.getElementById("myLinks");
  if (a.style.display == "block") {
    a.style.display = "none";
    document.body.style.filter = "none";
  } else {
    a.style.display = "block";
  }
}

function MenuAnimated(event) {
event.preventDefault();
event.target.style.animationName = "rotate"; /*Führt Anweisung 
auf das Element aus, welches Funktion ruft*/
event.target.style.animationDuration = "0.5s";
}

