<!DOCTYPE html>
<html lang="de-DE">
<head>
    <title>PONG - made by Tim Kalies</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="pongstyle.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script type="text/javascript" src="menu.js"></script>
    <script type="text/javascript" src="pong.js"></script>
</head>
<body>
    <h1 id="title">PONG</h1>
    <canvas id="playfield"></canvas>

    <form id="post_highscore">
        <h2 class="h03_sp">Teile deinen Highscore!</h2><br>
        <label for="name">Name:</label><br> 
        <input type="text" id="name" name="name" required><br>
        <input type="hidden" id="score" name="score" value=""><!-- Hidden input to hold score -->
        <input type="submit" id="submit_score" value="Senden!">
    </form>

    <div id="menu">
        <button id="startbutton">Spiel Starten</button>
        <h3 id="highscore_display"></h3>

        <div id="myLinks">
            <a href="#" class="topnav">Leaderboard</a>
            <a href="#" class="topnav">Profil</a>
            <a href="index.html" class="topnav">Startseite</a>
        </div>
        <button id="menubutton" onclick="openMenu()">Menü</button>
        <i class="fa fa-bars"></i>
    </div>
    <article id="show_highscore">
        <?php
        include('highscore-post.php');
        displayHighscore();
        ?>
    </article>
</body>
</html>
