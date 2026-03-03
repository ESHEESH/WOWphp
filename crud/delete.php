<?php
include 'config/connection.php';

if(isset($_POST['id'])) {

    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM journal WHERE id = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        header("Location: index.php?deleted=success");
        exit();
    } else {
        echo "Error deleting record.";
    }

    $stmt->close();
}
?>