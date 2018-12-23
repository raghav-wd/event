<?php
include "../includes/config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
$uniqid = "e".uniqid('', true);

$sql = "INSERT INTO users(`name`, `email`, `mobile`, `password`, `uniqid`) VALUES('$name', '$email', '$phno', '$pwd', '$uniqid')";
$res = mysqli_query($conn, $sql);

if($res) {
    header("Location: ../publish.php");
}
else {
    header("Location: ../signup.php");
}


?>