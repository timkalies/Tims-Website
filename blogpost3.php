<?php
$pageId = 'blogpost3';
header('Content-Type: text/html; charset=UTF-8'); // Setze die pageId für diese Seite
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
<a href="#" id="topnav">Artikel - 3000m Meeting Chemnitz </a>
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
<h2 class="h01_bp1">Hallenmeeting Chemnitz 3000m <br>14.01.2024 </h2>
 <img src="Bilder\Chemnitz-3000m.jpg" id="startbild" alt="Start bei den Deutschen U20-Europameisterschaften">
<div class="blogpost_2">
<p style="text-align: left;" id="blogtext_title"><strong>Erstes 3000m Rennen seit 5 Jahren</strong></p>
<br>
<p style="text-align: left;" id="blogtext_article">Die 3000m-Distanz anzutesten stand bereits seit langer Zeit auf dem Plan, da die Trainingsresultate bereits vor einiger Zeit positive Resultate vermuten ließen. <strong>Bereits vor zwei Jahren</strong>, im Juni 2022, plante ich innerhalb meiner alten Trainingsumgebung in Hannover diese Distanz anzutesten. Damals kam diesen Plänen jedoch eine unerwartete Covid-Infektion in den Weg.
<br>
Nachdem diese Idee über die kommenden 2 Jahre immer wieder aufgeworfen wurde, jedoch meisten aufgrund von Komplikationen mit anderen Terminen nie umgesetzt wurde, war es diesen Winter endlich möglich im Rahmen eines Hallenmeetings in Chemnitz Mitte Januar an einem Wettkampf über diese Distanz teilzunehmen.
<br>
<strong>15 lange Runden über die 200m lange Hallenbahn standen bevor.</strong> Nach zwei unruhigen ersten Runden kam langsam Ruhe in das Rennen. Bis 1000m vor Ziel war es mir möglich mit dem führenden mitzuhalten, von da an bestritt ich das Rennen alleine. Nach einem etwas langsameren, letzten Kilometer konnte ich in <strong>8:22min</strong> die Ziellinie überqueren und meine 5 Jahre alte Bestzeit von 11:12min deutlich unterbieten!</p>
</div>
</div>
<h2 class="h03_sp">Bildergalerie</h2>
<div class="scroll-container">
  <img src="Bilder\Blog\Blogpost123\ChemnitzHalle.webp" alt="Die Halle in Chemnitz, welche am 14.01 den 3000m Wettkmapf veranstaltete">
  <img src="Bilder\Blog\Blogpost123\ChemnitzWarmup.webp" alt="Anspannung, kurz vorm Start des Rennens">
  <img src="Bilder\Chemnitz-3000m.jpg" alt="Die anschließende Siegerehrung der schnellsten drei Läufer">
  <img src="Bilder\Blog\Blogpost123\ErgebnisseChemnitz.webp" alt="Die finalen Resultate- 3000m in 8:22min">
</div> 
<p class="p01_bp">Veröffentlicht: 18.10.2023</p>
<hr>
<h2 class="h03_sp">Alle Kommentare</h2>
<article id="show_comments">
<?php
include('comments-function.php');
displayComments('blogpost3');
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
<li><a href="#" class="downnav">Über Mich</a></li>
<li><a href="sponsors.html" class="downnav">Sponsoren</a></li>
<li><a href="kontakt.html" class="downnav">Kontakt</a></li>
<li><a href="impressum.html" class="downnav">Impressum</a></li>
</ul>

<p>Copyright © 2023 Tim Kalies</p> 
</div>
</footer>
</html>