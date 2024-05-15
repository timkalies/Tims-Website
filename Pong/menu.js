let menuButton, startButton, displayScore;

document.addEventListener("DOMContentLoaded", function () {
  menuButton = document.getElementById("restartbutton");
  startButton = document.getElementById("startbutton");
  displayScore = document.getElementById("highscore");
  startButton.addEventListener("click", start);
});

function openMenu() {
  let a = document.getElementById("myLinks");
  if (a.style.display == "block") {
    a.style.display = "none";
  } else {
    a.style.display = "block";
  }
}
