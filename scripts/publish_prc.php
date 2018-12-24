<?php
include "../includes/config.php";
session_start();

$event_title = $_SESSION['event_title'];
$event_date = $_SESSION['event_date'];
$event_url = $_SESSION['c_header'];
$event_details = $_SESSION['event_details'];
$chip_text_1 = $_SESSION['chip_text_1'];
$chip_text_2 = $_SESSION['chip_text_2'];
$chip_text_3 = $_SESSION['chip_text_3'];
$chip_text_4 = $_SESSION['chip_text_4'];
// $poster_dir = $_SESSION['poster_dir'];

$sql = "insert into posts(`event_title` ,`event_date` ,`event_url` ,`event_details` , `chip_text_1`, `chip_text_2`, `chip_text_3`, `chip_text_4`) value('$event_title', '$event_date','$event_url', '$event_details', '$chip_text_1', '$chip_text_2', '$chip_text_3', '$chip_text_4')";
$res = mysqli_query($conn, $sql);



if($res){
    header('Location: ../index.php');
}
else {
    echo "<h1>Oops, We ran into some trouble</h1>";
}













?>