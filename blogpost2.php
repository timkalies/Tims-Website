<?php
$pageId = 'blogpost2';
header('Content-Type: text/html; charset=UTF-8'); // Setze die pageId für diese Seite
?>
<!doctype html>
<html lang="de-DE">
<head>
<title>TIM KALIES - 1500m Läufer </title>
<!--Meta Einstellungen-->
<meta charset="UTF-8">
<meta name="keywords" content="1500m, Braunschweig, Tim Kalies, Laufen">
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
<a href="#" class="topnav">Artikel - U20-Deutsche Meisterschaft </a>
  <div id="myLinks">
    <a href="index.html" id="topnav">Startseite</a>
    <a href="blogs.html" class="topnav">Blog</a>
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
<h2 class="h01_bp1">Deutsche U20 Meisterschaft in Rostock <br>7-9.8.2023 </h2>
 <img src="Bilder\U20DM2.jpg" id="startbild" alt="Start bei den Deutschen U20-Europameisterschaften">
<div class="blogpost_2">
<p style="text-align: left;" id="blogtext_title"><b>Deutscher Vizemeistertitel über 1500m nach knappem Endspurt</b></p>
<br>
<p style="text-align: left;" id="blogtext_article">Bereits einen Tag vor dem Vorlauf angereist ging es zurück nach Rostock, in die Stadt, in welcher ich vor zwei Jahren meine erste <strong style="color: rgb(211, 181, 13)">Goldmedaille</strong> über die 1500m gewinnen konnte. Nach überstandenem Vorlauf am kommenden Tag, stand am 31.07.2023 mein Finale über die 1500m der U20 an.<br> Es war meine letzte Nationale Meisterschaft innerhalb dieser Altersklasse.<br> Mit dementsprechend hohen Ambitionen bin ich nach einer mich unfassbar zufriedenstellenden Saison an den Start gegangen, die Teilnahme an meiner ersten internationalen Meisterschaft, <strong>der U20-Europameisterschaft in Jerusalem</strong>, konnte ich bereits einige Wochen zuvor in Mannheim absichern, die Deutsche Meisterschaft lieferte neben dem Kampf um den Meisterschaftstitel auch eine optimale, letzte Chance für einen Formtest. <br><br>
Das Rennen startete nach etwas Verzögerung mit einem gemächlichen, jedoch Meisterschafts-üblichen, Angang. Aus diesem folgte viel Rangelei und taktische Umpositionierung innerhalb des Läuferfeldes. 400m vorm Ziel ging es in den Schlussspurt, bis 100m vor Ziel war es mir jedoch nicht möglich genug Abstand zu meiner Konkurrenz aufzubauen, wodurch ich schlussendlich kurz vor Ziel von meinem großen Konkurrenten Jan Dillemuth überspurtet wurde. 
<br>
Somit konnte ich mir den <strong style="color: silver">zweiten Platz</strong> in einem besonders gut besetzten Feld sichern und nahm neben der Medaille wichtige Lektionen für mein anstehendes, erstes internationales Rennen aus Rostock mit. </p>

</div>
</div>
<h2 class="h03_sp">Bildergalerie</h2>
<div class="scroll-container">
  <img src="Bilder\Blog\Blogpost123\StartlinieRostock.webp" alt="Die Athleten für den Finalen 1500m Lauf stehen an der Startlinie">
  <img src="Bilder\Blog\Blogpost123\StartRostock.webp" alt="Kurz nach dem Start des Finallaufs">
  <img src="Bilder\Blog\Blogpost123\RostockJanTobias.webp" alt="Die U20-DM Medaillisten beim gemeinsamen Foto">
  <img src="Bilder\Blog\Blogpost123\BLCRostock.webp" alt="Die BLC-Athleten nach den geschehenen Wettkämpfen">
  <img src="Bilder\Blog\Blogpost123\U20DM-Race.webp" alt="Das Rennen läuft auf Hochtouren">
</div> 
<p class="p01_bp">Veröffentlicht: 18.10.2023</p>
<h2 class="h03_sp">Alle Kommentare</h2>
<article id="show_comments">
<?php
include('comments-function.php');
displayComments('blogpost2');
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

<p>Copyright © 2023 Tim Kalies</p> 
</div>
</footer>
</html>