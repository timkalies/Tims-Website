<?php
function displayComments($pageId)
{
    include('db-connection.php');

    $sql = "SELECT * FROM comments WHERE page_id = '$pageId' ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $pid = "blog_kommentar";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p id='$pid'><strong>{$row["name"]}</strong> am {$row["created_at"]}:<br>{$row["comment"]}<br><br></p>";
        }
    } else {
        echo "Keine Kommentare vorhanden.";
    }

    $conn->close();
}
?>
