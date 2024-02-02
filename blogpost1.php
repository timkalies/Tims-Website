<?php
 $pageId = 'blogpost1';// Setze die pageId für diese Seite
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="de-DE">
<head>
<title>TIM KALIES - 1500m Läufer </title>
<!--Meta Einstellungen-->
<meta charset="UTF-8">
<meta name="keywords" content="1500m, Braunschweig, Tim Kalies, Laufen">
<meta name="description" content="Tim Kalies Lauf Blog">
<meta name="author" content="Tim Kalies">
<meta http-equiv="refresh" content="90">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Links-->
<link rel="stylesheet" href="style.css">
<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="favicon\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon\favicon-16x16.png">
<link rel="manifest" href="favicon\site.webmanifest">
<!--Nur bei Blogposts mitübernehmen-->
<link rel="stylesheet" href="blog.css">
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="blog.js"></script>
<!--Bindet JQuery ein-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
<body>
<header>
<!--Links noch ändern-->
<!-- Navigation -->
<nav class="navigation">
<a href="#">Artikel - 18.10.2023 </a>
  <div id="myLinks">
    <a href="index.html">Startseite</a>
    <a href="blogs.html">Blog</a>
    <a href="#">Über mich</a>
    <a href="#" id="topnav" style="display: none">Projekte</a>
    <a href="kontakt.html">Kontakt</a>
    <a href="sponsors.html">Sponsoren</a>
    <a href="impressum.html">Impressum</a>
  </div>
  <a href="javascript:void(0);" id="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</nav>
</header>
<main>
  <noscript>Bitte aktiviere Javascript um diese Seite nutzen zu können</noscript>
<div class="blogpost_1">
<h2 class="h01_bp1">U20-Europameisterschaft Jerusalem <br>7-9.8.2023 </h2>
 <img src="Bilder\U20EM_front.webp" id="startbild" alt="Bild aus der Kurve während dem Finale">
 <br>
<div class="blogpost_2">
<p style="text-align: left;" id="blogtext_title"><b>7. Platz bei der U20-EM in Jerusalem über 1500m</b></p>
<br><hr>
<p style="text-align: left;" id="blogtext_article">Wenige Tage vor meinem 19. Geburtstag stand die Anreise nach Jerusalem an. Gemeinsam als Nationalteam ging es aus Frankfurt mit dem Flugzeug auf die Reise. Angekommen blieben uns 3 Tage Zeit um sich an die klimatischen Bedingungen zu gewöhnen und auf die Wettkämpfe vorzubereiten. Innerhalb dieser Zeit besichtigten wird das Stadion und absoliverten unsere letzten Trainingseinheiten.<strong> Am 07.08.2024 stand endlich mein erstes Rennen an!</strong> In meinem ersten Internationalen Rennen galt mein Ziel den Vorlauf zu überstehen und zu den schnellsten sechs Läufern in meinem Vorlauf zu gehören, um mir einen Finalplatz zu sichern.<br> <strong>Nach einem packenden Schlussspurt und einer langen Wartezeit konnte ich mir knapp einen der super umkpämpften Finalplätze sichern!</strong><br> Ich war zu diesem Zeitpunkt bereits unfassbar zufrieden mit meiner Performance!<br> Ich war als 17. Platz der Meldeliste angereist und hatte Gesundheitlich etwas Unruhe in vorherigen zwei Wochen gehabt.<br>
Der Finaleinzug war also nicht selbstverständlich und ein harter Kampf.
<br><br>
<br> Im Finale angekommen war mein Ziel möglichst lange mit der Spitze mithalten zu können. Mit direktem Anschluss an die Führenden bis 600m vor Ziel gelang mir dies auch einigermaßen. Damit konnte ich näher an der Spitze bleiben als ich gedacht hätte, die letzten 800m in 1:47 konnte ich jedoch nicht mehr mitgehen.
<br>
Insgesamt bin ich sehr zufrieden mit der Meisterschaft. <br>Im Anschluss ging es erstmal in die Saisonpause um im Anschluss die kommende Saison mit den Deutschen Meisterschaften in meiner Heimatstadt Braunschweig als Highlight vorzubereiten.
</p>
<hr>
</div>
</div>
<h2 id="h03_sp">Bildergalerie</h2>
<div class="scroll-container">
  <img src="Bilder\Blog\Blogpost123\TeamfotoEM.webp" alt="Team Niedersachsen - U20-EM">
  <img src="Bilder\Blog\Blogpost123\FinaleEM1.webp" alt="Finallauf 1500m EM">
  <img src="Bilder\Blog\Blogpost123\WarmupEM.webp" alt="Tim im Warmup Bereich">
  <img src="Bilder\Blog\Blogpost123\ZimmerEM.webp" alt="Zimmer">
  <img src="Bilder\Blog\Blogpost123\ZielgeradeEM.webp" alt="Zielgerade Vorlauf">
</div> 
<p class="p01_bp">Veröffentlicht: 18.10.2023</p>
<br><hr><br>
<h2>Alle Kommentare</h2>
<?php
include('comments_function.php');
displayComments($pageId);
?>

<h2>Kommentar hinterlassen</h2>
<form action="submit_comment.php" method="post">
<input type="hidden" name="pageId" value="<?php echo $pageId; ?>">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Kommentar: <textarea name="comment" required></textarea><br>
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
<li><a href="index.html"  id="downnav">Startseite</a></li>
<li><a href="blogs.html" id="downnav">Blog</a></li>
<li><a href="#" id="downnav" style="display: none">Projekte</a></li>
<li><a href="#" id="downnav">Über Mich</a></li>
<li><a href="kontakt.html" id="downnav">Kontakt</a></li>
<li><a href="impressum.html" id="downnav">Impressum</a></li>
</ul>

<p>Copyright © 2023 Tim Kalies</p> 
</div>
</footer>
</html>