<?php
$conn = new mysqli('localhost', 'root', '', 'simple_posts');
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
