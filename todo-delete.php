<?php

session_start();

require("database.php");

$task = $_GET['id'];

$query = "DELETE FROM todo WHERE todo_id = '$task'";
$result = mysqli_query($conn, $query);

if(!empty($result)){
    header("location: /todo");}
else{
    echo "error";
}