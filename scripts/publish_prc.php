<?php
session_start();
include "../includes/config.php";

$event_title = $_SESSION['event_title'];
$event_date = $_SESSION['event_date'];
$event_url = $_SESSION['c_header'];
$event_details = $_SESSION['event_details'];
// $poster_dir = $_SESSION['poster_dir'];


$sql = "INSERT INTO posts(`event_title`, `event_date`, `event_url`, `event_details`) VALUES('$event_title', '$event_date', '$event_url', '$event_details')";
$res = mysqli_query($conn, $sql);

if($res){
    header('Location: ../index.php');
}
else {
    echo "NOPE";
}















?>