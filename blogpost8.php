<?php
//Hier ändern!
$pageId = 'blogpost8';
header('Content-Type: text/html; charset=UTF-8'); // Setze die pageId für diese Seite
?>
<!doctype html>
<html lang="de-DE">
<head>
<title>TIM KALIES - R5K in Berlin</title>
<!--Meta Einstellungen-->
<meta charset="UTF-8">
<meta name="keywords" content="Berlin, R5K, Tim Kalies, R5K Kalies, R5K Berlin">
<meta name="description" content="Tim Kalies, ein 1500m Läufer und Deutscher Meister, der häufig über seine sportlichen Erlebnisse und Erfolge postet.">
<meta name="author" content="Tim Kalies">
<meta http-equiv="refresh" content="90">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
   <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
   <link rel="manifest" href="favicon/site.webmanifest">

<!--Links-->
<link rel="stylesheet" href="style.css">
<!--Nur bei Blogposts mitübernehmen-->
<link rel="stylesheet" href="blog.css">
<script type="text/javascript" src="index.js"></script>
<!--Bindet JQuery ein-->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<!--FONT AWESOME-->
<script src="https://kit.fontawesome.com/689fa75987.js" crossorigin="anonymous"></script>
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<!-- Google tag (gtag.js) + AdSense -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-75R8GKTYXK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-75R8GKTYXK');
</script>
</head>
<body style="background-image: url(Bilder/U20DM.jpg)">
<header>
<!--Links noch ändern-->
<!-- Navigation -->
<div class="navigation">
<a href="#" id="topnav">Artikel - Podium über 5km Straße in Berlin </a>
  <div id="myLinks">
    <a href="index.html" id="topnav">Startseite</a>
    <a href="blogs.html" class="topnav">Blog</a>
    <a href="#" class="topnav">Über mich</a>
    <a href="kontakt.html" class="topnav">Kontakt</a>
    <a href="sponsors.html" class="topnav">Sponsoren</a>
    <a href="impressum.html" class="topnav">Impressum</a>
  </div>
  <a href="javascript:void(0);" id="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</header>
<main>
  <noscript>Bitte aktiviere Javascript um diese Seite nutzen zu können</noscript>
<div class="blogpost_1">
<h2 class="h01_bp1">Podium beim R5K Rennen? - Berlin Marathon 2024</h2>
<img src="Bilder/blogpost8/Start.webp" id="startbild" alt="Am Start des R5K Rennen">
<div class="blogpost_2">
<p style="text-align: left;" id="blogtext_article">Zwischen dreiwöchiger Saisonpause im August und dem ersten Höhentrainingslager im Oktober stand noch ein weiterer Zwischenstopp an. Am 28. September stand das Finale der Deutschlandweit stattfindenden "R5k-Tour" statt. Bei dieser nehmen Jugendliche der ALtersklassen U20-U23 an 5km Straßenläufen teil und kämpfen um hohe Preisgelder und Trainingslagerzuschüsse. <br><br>
Viele national bekannte Nachwuchsathleten nahmen am in Berlin stattfindenden Finale der Tour teil. <br> Ich ging mit den Ambitionen an den Start, meine gute Form der ersten paar Trainingswochen beweisen zu können und weit vorne mitzulaufen. <br>
Nach einem schnellen Angang (An der Spitze war der erste Kilometer unter 2:50min!), schloss ich nach 2km wieder an die Führung an und übernahm die letzten 1,5km selbst das Tempo. <br><br>
Auf dem letzten Kilometer wurde es extrem Spannend! Ich konnte mich mit zwei weiteren Konkurrenten vom restlichen Feld lösen. Leider verlor ich durch einen verschätzten Spurt das Rennen und fand mich auf Platz 3 wieder.<br>
Darauf bin ich sehr Stolz, auch auf meine erste 5km Zeit unter 15min (14:59min war die Zielzeit)! Nun geht es für 3,5 Wochen in's Trainingslager nach Livigno, zur optimalen Vorbereitung der weiteren Saison. </p>
</div>
</div>
<hr>

<br>
  <h2 class="h03_sp">Bildergalerie</h2>
<div class="scroll-container">
  <img src="Bilder\blogpost8\Berlin.webp" alt="Rund um den Berlin-Marathon war die Stadt voll">
  <img src="Bilder\blogpost8\Ehrung.webp" alt="Siegerehrung der U23-Wertung">
  <img src="Bilder\blogpost8\Podium.webp" alt="Blick aufs Podium">
  <img src="Bilder\blogpost8\Team.webp" alt="Unsere Trainingsgruppe versammelt">
  <img src="Bilder\blogpost8\Tim.webp" alt="Tim vorm Start">
</div> 
<!--Ändern-->
<p class="p01_bp">Veröffentlicht: 06.10.2024</p>
<hr>
<h2 class="h03_sp">Alle Kommentare</h2>
<article id="show_comments">
<?php
include('comments-function.php');
//Hier ändern!
displayComments('blogpost8');
?>
</article>

<h2 class="h03_sp">Kommentar hinterlassen</h2>
<form action="submit-comment.php" method="post" id="post_comment" accept-charset="UTF-8">
<input type="hidden" name="pageId" value="<?php echo $pageId; ?>">
   <label for="text">Name:</label><br> <input type="text" name="name" required><br>
   <label for="email">E-Mail:</label><br> <input type="email" name="email" required><br>
   <label for="text">Kommentar:</label><br> <textarea type="text" name="comment" required></textarea><br>
    <input type="submit" value="Kommentar abschicken">
</form>
</main>
</body>
<footer id="footer">
<div class="row">
<a href="https://www.facebook.com/suchtverhalten.cr.5"><i class="fa fa-facebook"></i></a>
<a href="instagram.com/tim.kalies"><i class="fa fa-instagram"></i></a>
<a href="https://www.strava.com/athletes/45004825"><i class="fab fa-strava"></i></a>

<ul>
<li><a href="#" class="downnav">Startseite</a></li>
<li><a href="blogs.html" class="downnav">Blog</a></li>
<li><a href="sponsors.html" class="downnav">Sponsoren</a></li>
<li><a href="kontakt.html" class="downnav">Kontakt</a></li>
<li><a href="impressum.html" class="downnav">Impressum</a></li>
</ul>

<p>Copyright © 2024 Tim Kalies</p> 
</div>
</footer>
</html>