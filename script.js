let x = 0, y = 0;
document.addEventListener("DOMContentLoaded", function() {
  let b = document.getElementById("icon").addEventListener("click", MenuAnimated);
  });




/* Öffnet und Schließt Menü */

function myFunction() {
  let a = document.getElementById("myLinks");
  if (a.style.display == "block") {
    a.style.display = "none";
  } else {
    a.style.display = "block";
  }
}

function MenuAnimated(event) {
  x++;
  if (x%2 === 1) { //Öffnen des Menüs
event.preventDefault();
event.target.style.animationName = "rotate"; /*Führt Anweisung 
auf das Element aus, welches Funktion ruft*/
event.target.style.animationDuration = "0.4s";
  } else if  (x%2 === 0) {
    event.preventDefault();
event.target.style.animationName = "rotateBack"; /*Führt Anweisung 
auf das Element aus, welches Funktion ruft*/
event.target.style.animationDuration = "0.4s";
  }
}

function MenuLinksAnimated(event) { //Unbenutzt aktuell
  y++;
  console.log(y);
  if (y%2 === 1) { //Öffnen des Menüs
event.preventDefault();
event.target.style.animationName = "sizeUp"; /*Führt Anweisung 
auf das Element aus, welches Funktion ruft*/
event.target.style.animationDuration = "0.5s";
console.log("size up animation gestartet");
  } else if  (y%2 === 0) {
    event.preventDefault();
event.target.style.animationName = "sizeDown"; /*Führt Anweisung 
auf das Element aus, welches Funktion ruft*/
event.target.style.animationDuration = "0.5s";
console.log("size up animation gestoppt");
  }
}