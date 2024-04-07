// Author: Donald Jones <donald@birminghamdeveloper.com>

var FPS = 60;
var engine = {};
var canvas = document.getElementById('gamescreen');
var ctx = canvas.getContext('2d');
var STOPPED = true;
var gameloop;

var Player = {
  score: 0
};

var ball = {
  startSize: 8,
  minSize: 2,
  r: 8,
  x: (canvas.width / 2),
  y: (canvas.height / 2),
  vx: Math.random() * 20 + -1,
  vy: Math.random() * 20 + -1,
  center: {
    x: function() {
      return ball.x + ball.r;
    }, 
    y: function() {
      return ball.y + ball.r;
    }
  }
};

var paddle1 = {
  w: 10,
  h: 50,
  x: 1,
  y: 0
};

engine.drawPaddle = function (paddle) {
  if (paddle.y > canvas.height - paddle.h){
    paddle.y = canvas.height - paddle.h;
  } else if (paddle.y < 0) {
    paddle.y = 0;
  }
  
  ctx.beginPath();
  ctx.fillStyle = "white";
  ctx.rect(paddle.x, paddle.y, paddle.w, paddle.h);
  ctx.closePath();
  ctx.fill();
};

engine.drawBall = function () {
  ball.x = ball.x + ball.vx;
  ball.y = ball.y + ball.vy;
  if (ball.x < 0) {
    engine.endGame();
    return;
  }
  if (ball.x > canvas.width - ball.r) {
    ball.vx = -1 * ball.vx;
  }
  if (ball.y > canvas.height - ball.r || ball.y < 0 + ball.r) {
    ball.vy = -1 * ball.vy;
  }
  ctx.beginPath();
  ctx.fillStyle = "white";
  ctx.arc(ball.x, ball.y, ball.r * 2, 0, Math.PI*2, true);
  ctx.closePath();
  ctx.fill();
};

engine.checkCollision = function (paddle, ball) {
  var paddleCenter = {
    x: (paddle.x + paddle.w) / 2,
    y: (paddle.y + paddle.h) / 2
  };
  if (ball.x - ball.r <= (paddle.w + paddle.x)) {
    if ((ball.y + ball.r + ball.r <= paddle.y + paddle.h || ball.y <= paddle.y + paddle.h) && (ball.y + ball.r + ball.r >= paddle.y || ball.y >= paddle.y)) {
      ball.vx = -1 * ball.vx;
      if (ball.y < paddleCenter.y) {
        ball.vy = -1 * ball.vy;
      }
      ball.vx += 1;
      ball.vy += 1;
      Player.score += 1;
      if (ball.r > ball.minSize && ball.r <= ball.startSize) {
        ball.r -= 1;
      }
    }
  }
};

engine.renderScore = function () {
  var scoreBoard = document.getElementById('score');
  scoreBoard.innerHTML = Player.score;
};

engine.startGame = function () {
  STOPPED = false;
  ball.x = (canvas.width / 2);
  ball.y = (canvas.width / 2);
  ball.vx = Math.random() * 3 + 1;
  ball.vy = Math.random() * 3 + 1;
  ball.r = ball.startSize;
  Player.score = 0;
  gameloop = setInterval(function() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    engine.drawBall();
    engine.drawPaddle(paddle1);
    engine.checkCollision(paddle1, ball);
    engine.renderScore(); 
  }, 1000 / FPS);
};

engine.endGame = function () {
  STOPPED = true;
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  clearInterval(gameloop);
  ctx.font="20px Arial";
  ctx.fillText("Game Over! Final Score: " + Player.score, canvas.width / 2 - 125, canvas.height / 2);
  ctx.fillText("Press Enter to Begin!", canvas.width / 2 - 95, canvas.height / 2 + 25);
};

engine.mousePosition = function (evt) {
  var gameBounds = canvas.getBoundingClientRect();
  paddle1.y = evt.clientY - gameBounds.top;
};

ctx.font="20px Arial";
ctx.fillStyle = 'white';
ctx.fillText("Press Enter to Begin!", canvas.width / 2 - 95, canvas.height / 2);

window.addEventListener('keydown', function (e) {
  if (e.keyCode === 27) {
    engine.endGame();
  } else if (e.keyCode === 13 && STOPPED) {
    engine.startGame();
  }
});

canvas.addEventListener('mousemove', function (e) {
  if (!STOPPED) {
    return engine.mousePosition(e);
  }
});
