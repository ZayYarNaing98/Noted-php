<?php require ("database.php");?>
<?php
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM notes WHERE id = '$id'");
    $rows = mysqli_fetch_assoc($result);
?>

<?php require "htmlHeader.php"; ?>
<?php require 'navbar.php'; ?>

    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-secondary text-white">Note Lists</div>
            <div class="card-body">
                <h5 class="card-title text-info"><?= $rows['title'] ?></h5>
                <p class="card-text text-muted"><?= $rows['body'] ?></p>    
            </div>
            <div class="card-footer">
                <a href="note/edit?id=<?= $rows['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="note/delete?id=<?= $rows['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
    
<?php require "htmlFooter.php"; ?>