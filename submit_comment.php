<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $comment = htmlspecialchars($_POST["comment"]);
    $pageId = htmlspecialchars($_POST['pageId']);

    // Zusätzliche Überprüfung der Eingaben
    if (empty($name) || empty($email) || empty($comment) || empty($pageId)) {
        die("Bitte füllen Sie alle Felder aus.");
    }

    // Prepared Statement mit Prepared Statements für mehr Sicherheit
    $stmt = $conn->prepare("INSERT INTO comments (name, email, comment, page_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $comment, $pageId);

    // Daten einfügen
    if ($stmt->execute()) {
        // Erfolgreich eingefügt, gib den neu eingefügten Kommentar zurück
        $newCommentId = $conn->insert_id;
        $stmt->close();

        $sql_comments = "SELECT * FROM comments WHERE id = $newCommentId";
        $result_comments = $conn->query($sql_comments);

        if ($result_comments->num_rows > 0) {
            while ($row = $result_comments->fetch_assoc()) {
                // Ausgabe der Daten nach Bedarf anpassen
                header("Location: $pageId.php");
                echo "<p><strong>{$row["name"]}</strong> am {$row["created_at"]}:<br>{$row["comment"]}<br><br></p>";
            }
        } else {
            header("Location: $pageId.php");
            echo "Fehler beim Abrufen des neuen Kommentars.";
        }
    } else {
        header("Location: $pageId.php");
        echo "Fehler beim Einfügen des Kommentars: " . $conn->error;
    }

    $conn->close();
}
?>
