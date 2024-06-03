<?php
include('score-connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $score = htmlspecialchars($_POST["score"]);

    // Additional validation
    if (empty($name) || empty($score)) {
        die("Bitte füllen Sie alle Felder aus.");
    }

    // Validate score to be a number
    if (!is_numeric($score)) {
        die("Der Score muss eine Zahl sein.");
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO highscore (name, score) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $score);

    if ($stmt->execute()) {
        // Successfully inserted
        $stmt->close();
        header("Location: pong.php");
        exit();
    } else {
        die("Fehler beim Einfügen des Resultats: " . $conn->error);
    }

    $conn->close();
}
?>
