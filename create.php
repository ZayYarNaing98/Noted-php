<?php
session_start();

require("database.php");
$task = $_POST['todo-input'];
$user_id = $_SESSION['user']['id'];

$query="INSERT INTO todo(todo_list, user_id) VALUES ('$task','$user_id')";

$result=mysqli_query($conn, $query); 

if(!empty($result)){
    header("location:/todo");}
else{
    echo "Create to Login";
}