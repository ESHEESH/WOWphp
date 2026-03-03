<?php include 'config/connection.php'; ?>
<?php include 'includes/header.php'; ?>

<form action="insert.php" method="POST" class="mb-4">
    <input type="text" name="title" class="form-control mb-2" placeholder="Title" required>
    <textarea name="content" class="form-control mb-2" placeholder="Write something..." required></textarea>
    <input type="date" name="entry_date" class="form-control mb-2" required>
    <button type="submit" class="btn btn-primary">Add Entry</button>
</form>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th>Date</th>
    <th>Actions</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM journal");

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['content']; ?></td>
    <td><?php echo $row['entry_date']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <form action="delete.php" method="POST" style="display:inline;"
      onsubmit="return confirm('Are you sure you want to delete this entry?');">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
    </td>
</tr>
<?php } ?>

</table>

<?php include 'includes/footer.php'; ?>
