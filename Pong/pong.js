let tileSize,
  nrOfTilesInX,
  nrOfTilesInY,
  canvas,
  ctx,
  snakeColor,
  snakeX,
  snakeY,
  snakeZ,
  foodColor,
  foodX,
  foodY,
  foodZ,
  foodN,
  snakeDirection,
  score,
  gameLoopInterval,
  gameSpeed,
  moveX,
  moveY,
  touchStartX;

let highscore = 0;
const Direction = {};
//Variablen außerhalb deklariert für global scope

/*********************************************************/

document.addEventListener("DOMContentLoaded", function () {
  /*********
   * GAME - Variablen
   *********/
  gameSpeed = 100; //legt tickspeed fest
  highscore = 0;
  tileSize = 15;
  nrOfTilesInX = 30;
  nrOfTilesInY = 40;
  score = 0;

  /*********
   * PLAYER - Variablen
   *********/

  snakeColor = "black"; //Setzt Plattform Farbe
  snakeX = 14; //X-Koordinate
  snakeY = 39; //Y-Koordinate
  snakeZ = 5; //Länge
  //setzt Snake Position

  foodColor = "green"; //Setzt Ball Farbe
  foodX = 14;
  foodY = 10;
  foodZ = 1;

  moveX = 1;
  moveY = 1;
  //setzt züfällige Apfel Position innerhalb des Spielfelds

  Object.assign(Direction, {
    //setzt steuerungsmarker
    RIGHT: 2,
    LEFT: 4,
  });

  //Setzt grundlegende Richtung, lässt sich durch steuerung ändern

  /*********
   * Canvas - Variablen
   *********/
  displayScore.innerHTML = "Highscore: " + highscore;
  canvas = document.getElementById("playfield");
  ctx = canvas.getContext("2d");
  /*Berechnet Canvas Größe*/
  ctx.canvas.width = nrOfTilesInX * tileSize;
  ctx.canvas.height = nrOfTilesInY * tileSize;
});

/*********************************************************/
/* Zeichnet Snake auf Canvas*/
function fillTile(x, y, z, color) {
  ctx.beginPath(); /*Setzt Startpunkt für Tile*/
  ctx.rect(
    x * tileSize /*Setzt x-koordinate der Schlange*/,
    y * tileSize /*Setzt y-koordinate der Schlange*/,
    z * tileSize /*Setzt Weite der Schlange*/,
    tileSize
  ); /*Setzt Höhe der Schlange*/
  ctx.fillStyle = color; /*Setzt Farbe der Schlange*/
  ctx.fill(); /*Füllt Tile mit gewählter Farbe*/
  ctx.closePath(); /*Füllt restliche linien*/
}

/*********************************************************/

function drawText(text, font, color, x, y) {
  //Zeichnet Score auf Canvasd
  ctx.beginPath();
  ctx.font = font;
  ctx.fillStyle = color;
  ctx.fillText(text, x, y);
  ctx.closePath();
}

/*********************************************************/

function clearCanvas() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

/*********************************************************/
function moveBall() {
  foodX = foodX + moveX;
  foodY = foodY + moveY;
}
function moveSnake() {
  //Bestimmt Richtungssinn bei spezifischer Eingabe
  if (snakeDirection == Direction.RIGHT) {
    snakeX++;
  } else if (snakeDirection == Direction.LEFT) {
    snakeX--;
  }
}
function onTouchStart(event) {
  let screenWidth = window.innerWidth;
  if (event.touches.length > 0) {
    touchStartX = event.touches[0].clientX; // Speichert die x-Koordinate des Touch-Startpunkts
    event.preventDefault();
    if (touchStartX > screenWidth / 2) {
      snakeX++;
    } else if (touchStartX < screenWidth / 2) {
      snakeX--;
    }
  }
}

/*********************************************************/

function keyPressed(event) {
  if (event.key == "ArrowRight") {
    snakeDirection = Direction.RIGHT;
  } else if (event.key == "ArrowLeft") {
    snakeDirection = Direction.LEFT;
  }
}

//Website registriert jede Tastenaktion und führt dann steuerung aus
/*********************************************************/
function gameOver() {
  drawText(
    "Game over!",
    "60px Arial black",
    "black",
    canvas.width / 2 - 200,
    canvas.height / 2
  );
  document.removeEventListener("touchstart", onTouchStart, { passive: false });
  startButton.addEventListener("click", restart);
  startButton.disabled = false;
  startButton.style.opacity = "1";
  menuField.style.opacity = "1";
  startButton.innerHTML = "Neustarten";
  if (score >= highscore) {
    //wird benötigt, um highscore grundlegend als zweite var zu updaten
    highscore = score;
    updateHighscore(score);
  }
  clearInterval(gameLoopInterval);
}
function checkWallCollision() {
  //Wenn Schlange Wand in x-oder-y richtung berührt spielende
  if (foodY >= nrOfTilesInY) {
    gameOver();
  }

  if (foodY <= 0) {
    moveY = 1;
  }
  if (foodX <= 0) {
    moveX = 1;
  } else if (foodX >= nrOfTilesInX - 1) {
    moveX = -1;
  }
  if (
    Math.round(foodY) >= snakeY - 1 &&
    Math.round(foodX) >= snakeX - (snakeZ / 2 - 0.5) &&
    Math.round(foodX) <= snakeX + (snakeZ / 2 + 0.5)
  ) {
    moveY = -1;
    score++;
  }
  if (snakeX == nrOfTilesInX - 4) {
    snakeX--;
  } else if (snakeX == -1) {
    snakeX++;
  }
}

/*********************************************************/

// Called die Funktion und lädt sie alle 0.1sec neu

/*********************************************************/

//Lädt Canvas regelmäßig neu um "fillTile" darzustellen
function gameLoop() {
  //Entfernt zuvor gefüllte Tiles
  clearCanvas();
  //Bestimmt die X-Y Koordinate bei Bewegungsrichtung
  moveSnake();
  moveBall();
  //Checkt ob Schlange mit Wand kollidiert
  checkWallCollision();
  //Zeichnet den Spieler/Snake
  fillTile(snakeX, snakeY, snakeZ, snakeColor);
  // zeichnet den Apfel
  fillTile(foodX, foodY, foodZ, foodColor);
  //Zeichnet score
  drawText("Score: " + score, "20px Arial", "black", 10, canvas.height - 570);
}

function start() {
  gameSpeed = 80;
  //Added Listener, die auf Touch und Tasteneingaben achten
  document.addEventListener("keydown", keyPressed);
  document.addEventListener("touchstart", onTouchStart, { passive: false });
  gameLoopInterval = setInterval(gameLoop, gameSpeed);
  //Deaktiviert Restart Button
  startButton.removeEventListener("click", start);
  startButton.disabled = true;
  startButton.style.opacity = "0.5";
  menuField.style.opacity = "0.5";
  //Schließt Menüfeld bei Spielbeginn, wenn offen
  if (menuField.style.display == "block") {
    menuField.style.display = "none";
  }
}
function restart() {
  //Lässt auf Touch reagieren, deaktiviert menüflächen u. normale reaktion des bildschirms
  document.addEventListener("touchstart", onTouchStart, { passive: false });
  //Deaktiviert Startbutton
  startButton.disabled = false;
  startButton.style.opacity = "0.5";
  menuField.style.opacity = "0.5";
  //cleart Bildschirm
  fillTile(canvas.width / 2 - 200, canvas.height / 2, "lightgrey");
  clearCanvas();
  //Bestimmt die X-Y Koordinate bei Bewegungsrichtung
  gameSpeed = 80;
  score = 0;
  foodX = 14;
  foodY = 10;
  snakeX = 14;
  snakeY = 39; //Setzt Koords und Score auf Anfang
  fillTile(snakeX, snakeY, snakeZ, snakeColor);
  fillTile(foodX, foodY, foodZ, foodColor);
  drawText("Score: " + score, "20px Arial", "black", 0, canvas.height - 20);
  // Vor dem Starten eines neuen Intervalls das vorherige löschen
  clearInterval(gameLoopInterval);
  gameLoopInterval = setInterval(gameLoop, gameSpeed);
  //Schließt Menüfeld bei Spielbeginn, wenn offen
  if (menuField.style.display == "block") {
    menuField.style.display = "none";
  }
}
