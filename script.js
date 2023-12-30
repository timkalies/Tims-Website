let b = document.getElementsByClassName("icon");
b = document.addEventListener("click", MenuAnimated);

/* Öffnet und Schließt Menü */

function myFunction() {
  let a = document.getElementById("myLinks");
  if (a.style.display == "block") {
    a.style.display = "none";
  } else {
    a.style.display = "block";
  }
}

function MenuAnimated() {
event.preventDefault();
b.style.animationName = "rotate";
b.style.animationDuration = "0.5s";
}

