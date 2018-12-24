<?php
include "../includes/config.php";
session_start();

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "select * from users where email='$email'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$r_pwd = $row['password'];

if($pwd == $r_pwd){

    $_SESSION['uniqid'] = $row['uniqid'];
    setcookie("cookie_uniqid", $_SESSION['uniqid'], time()+(86400 * 100), "/");

    header("Location: ../publish.php");
}
else {
    $_SESSION['message'] = "Username or Password is entered wrong";
    header("Location: ../login.php");
}

?>