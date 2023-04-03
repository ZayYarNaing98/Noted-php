<?php session_start(); ?>
<?php require('database.php'); ?>

<?php
    $query = "SELECT * FROM todo WHERE user_id='".$_SESSION['user']['id']."'" ;
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('empty data');
    }else{
        // $rows =$result->fetch_assoc();
    }
?>

<?php require('htmlHeader.php'); ?>
<?php require('navbar.php'); ?>
    <div class="container">
        <form method="POST" action="/create">
            <div class="input-group mb-3">
                <input type="text" name="todo-input" id="todo-input" class="form-control mt-5" placeholder="Enter Tasks" />
                <button class="btn btn-success mt-5" type="submit">Add Task</button>
            </div>
        </form>
        <br/>
        <table class="table table-striped">
                <?php while($rows = mysqli_fetch_assoc($result)) :?>
                <tr>
                    <td scope="col"><?= $rows['todo_id'] ?></td>
                    <td scope="col"><?= $rows['todo_list'] ?></td>
                    <td scope="col">
                        <a href="/todo/edit?id=<?= $rows['todo_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <span>|</span>
                        <a href="/todo/delete?id=<?= $rows['todo_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endwhile ?>
        </table>
    </div>
<?php require('htmlFooter.php'); ?>
