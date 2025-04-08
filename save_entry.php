<?php
include 'connect.php';

$title = $_POST['title'];
$content = $_POST['content'];

exec("python/python encrypt.py '$content'", $encrypted_content);

$sql = "INSERT INTO diary_entries (title, content) VALUES ('$title', '$encrypted_content[0]')";

if ($conn->query($sql) === TRUE) {
    echo "Entry saved!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
