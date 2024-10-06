<?php
$servername = "localhost";
$username = "d04071b2";
$password = "REw4QSiUKJdWnijufkff";
$dbname = "d04071b2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}
?>
