let menuField, startButton, displayScore, scoreSubmitButton;
let currentHighscore = 0; // Globale Variable zum Speichern des Highscores

document.addEventListener("DOMContentLoaded", function () {
  menuField = document.getElementById("myLinks");
  startButton = document.getElementById("startbutton");
  displayScore = document.getElementById("highscore_display");
  scoreSubmitButton = document.getElementById("submit_score");

  // Initially disable the score submit button
  scoreSubmitButton.disabled = true;

  // Add event listeners
  startButton.addEventListener("click", start);
  document
    .getElementById("post_highscore")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      // Set the highscore in the hidden input field before submitting
      document.getElementById("score").value = getHighscore();

      // Collect data from the form
      let formData = new FormData(this);

      // Send data to the server
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "submit-highscore.php?t=" + Math.random(), true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          console.log(xhr.responseText);
          // Optionally handle server response
          window.location.reload();
        }
      };
      xhr.send(formData);
    });
});

// Toggle menu display
function openMenu() {
  menuField.style.display =
    menuField.style.display === "block" ? "none" : "block";
}

function getHighscore() {
  return currentHighscore;
}
function updateHighscore(newScore) {
  currentHighscore = newScore;
  document.getElementById("score").value = currentHighscore;
  scoreSubmitButton.disabled = false;
  scoreSubmitButton.style.opacity = "1";
  if (displayScore) {
    displayScore.innerHTML = "Highscore: " + currentHighscore;
  }
}
