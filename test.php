<?php
session_start();
// if(isset($_SESSION['uniqid'])){
//     //access granted only to publishers;
// }
// else {
//     header("Location: login.php");
// }
// if(isset($_GET['reset'])){
//     session_destroy();
//     unset($_SESSION['reset']);
//     header("Location: publish.php");
// }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Publish SRM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/framework.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

  <?php include "includes/topbar.php"; ?>


<input type="text" class="datepicker">

  <?php include "includes/footer.php"; ?>


  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <script>


   $(document).ready(function () {
      $('.datepicker').datepicker();
    });

  </script>
</body>

</html>