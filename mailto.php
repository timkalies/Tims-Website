<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Empfänger-E-Mail-Adresse
  $empfaenger = "kontakt@timkalies.de";

  // Betreff der E-Mail
  $betreff = "Neue Kontaktanfrage von $name";

  // Daten aus dem Formular
  $name = $_POST["name"];
  $email .= $_POST["email"];
  $info .= $_POST["betreff"];
  $text .= $_POST["text"];

  // Weitere Formulardaten hier einfügen

  // E-Mail-Inhalt
  $nachricht = "Name: $name\n";
  $nachricht .= "E-Mail: $email\n";
  $nachricht .= "Betreff: $info\n";
  $nachricht .= "Text: $text\n";

  // Weitere Formulardaten hier einfügen

  // E-Mail senden
  mail($empfaenger, $betreff, $nachricht);
  header("Location: kontakt.html");
  exit();
}
?>
