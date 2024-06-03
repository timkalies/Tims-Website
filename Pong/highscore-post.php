
<?php
function displayHighscore()
{
    include('score-connection.php');

    $sql = "SELECT * FROM highscore ORDER BY score DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong>: " . htmlspecialchars($row['score']) . "<br><br></p>";
        }
    } else {
        echo "Keine Highscores vorhanden.";
    }

    $conn->close();
}
?>
