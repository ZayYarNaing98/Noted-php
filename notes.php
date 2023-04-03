<?php require ("database.php");?>

<?php

$query = "SELECT * FROM notes";
$result = mysqli_query($conn, $query);
if(!$result){
    die("empty data");
}else{
    // var_dump($result);
}
?>

<?php require ('htmlHeader.php'); ?>
<?php require ('navbar.php'); ?>

    <div class="container">
        <?php while($rows = mysqli_fetch_assoc($result)) :?>
            <div class="card my-4">
                <div class="card-header bg-secondary text-white">Note Lists</div>
                <div class="card-body">
                    <h5 class="card-title text-info"><?= $rows['title'] ?></h5>
                    <p class="card-text text-muted"><?= substr(htmlentities($rows['body']), 0,200) . '.....' ?></p>    
                </div>
                <div class="card-footer">
                    <a href="/detail?id=<?= $rows['id'] ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endwhile ?>
    </div>

<?php require ('htmlFooter.php'); ?>

