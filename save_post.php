<?php
require 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['file'];

$stmt = $conn->prepare("INSERT INTO posts (title, content, image) VALUES (?, ?, ?)");
$stmt->bind_param("ss", $title, $content);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: posts.php");
exit();
?>
