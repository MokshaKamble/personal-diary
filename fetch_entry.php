<?php
include 'connect.php';

$sql = "SELECT * FROM diary_entries ORDER BY created_at DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";  // Sanitize to prevent XSS
    echo "<p>" . htmlspecialchars($row['content']) . "</p>";  // Sanitize to prevent XSS
    echo "<hr>";
}

$conn->close();
?>


