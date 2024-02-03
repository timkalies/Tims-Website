<?php
$servername = "localhost";
$username = "d03f6d10";
$password = "Boomer123";
$dbname = "d03f6d10";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}
?>
