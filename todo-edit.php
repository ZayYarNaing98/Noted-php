<?php require('database.php'); ?>
<?php

    $id = $_GET['id'];

    $query = "SELECT * FROM todo WHERE todo_id = '$id'";
    $result = mysqli_query($conn, $query);
    $note = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todo_id = $_POST['post_id'];
    $todo_list = $_POST['todo_list'];
    $query = "UPDATE todo SET todo_list = '".$todo_list."' WHERE todo_id = $todo_id";
    mysqli_query($conn, $query);

    header("location: /todo");
    exit();
  }
?>

<?php require('htmlHeader.php'); ?>
<?php require('navbar.php'); ?>
<div class="container">
<div class="card my-4">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="body">Todo_List</label>
                    <input type="hidden" name="post_id" value="<?php echo $note['todo_id'] ?>">
                    <textarea class="form-control" id="todo_list" name="todo_list" rows="5"><?=$note['todo_list'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
            </form>
        </div>
    </div>
</div>
<?php require('htmlFooter.php'); ?>