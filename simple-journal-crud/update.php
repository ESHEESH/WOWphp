<?php
include 'config/connection.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['entry_date'];

$sql = "UPDATE journal SET
        title='$title',
        content='$content',
        entry_date='$date'
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: index.php");
?>
