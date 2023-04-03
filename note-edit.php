<?php require("database.php"); ?>
<?php
$id = $_GET['id'];

$query = "SELECT * FROM notes WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$note = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $query = "UPDATE notes SET title='$title', body='$body' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("location: /detail?id=$id");
    exit();
}
?>

<?php require("htmlHeader.php"); ?>
<?php require('navbar.php'); ?>

<div class="container">
    <div class="card my-4">
        <div class="card-header bg-secondary text-white">Edit Note</div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $note['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5"><?= $note['body'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<?php require("htmlFooter.php"); ?>
