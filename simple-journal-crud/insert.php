<?php
include 'config/connection.php';

$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['entry_date'];

$sql = "INSERT INTO journal (title, content, entry_date)
        VALUES ('$title', '$content', '$date')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>
