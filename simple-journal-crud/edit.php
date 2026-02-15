<?php
include 'config/connection.php';
include 'includes/header.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM journal WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="title" class="form-control mb-2"
        value="<?php echo $row['title']; ?>" required>
    <textarea name="content" class="form-control mb-2" required><?php echo $row['content']; ?></textarea>
    <input type="date" name="entry_date" class="form-control mb-2"
        value="<?php echo $row['entry_date']; ?>" required>
    <button type="submit" class="btn btn-success">Update Entry</button>
</form>

<?php include 'includes/footer.php'; ?>
