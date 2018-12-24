<?php
session_start();
if(isset($_GET['reset'])){
    session_destroy();
    unset($_SESSION['reset']);
    header("Location: publish.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Publish SRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/framework.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>
<body>

    <?php include "includes/topbar.php"; ?>


    <div class="center">
        <div class="container" style="text-align: left;">
            <div class="card medium">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="../images/3.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Event Title : 
                        <br/>
                        Date : 
                        <i class="material-icons right">more_vert</i></span>
                    <p><a href="#">Here goes your Registration Url or Header</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Event Name<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="row">
                <div class="col l8 s12 m5">
                    <form action="preview.php" method="POST" enctype="multipart/form-data">
                        <div class="card-panel yellow lighten-4">
                            <span class="black-text">
                                Event Title: <br />
                                <div class="input-field inline">
                                    <input name="event_title" id="event_title" type="text" class="validate" value="<?php if(isset($_SESSION['event_title'])) echo $_SESSION['event_title']; ?>">
                                </div><br />
                                Date : <br />
                                <div class="input-field inline">
                                    <input name="event_date" id="event_date" type="text" class="validate" value="<?php if(isset($_SESSION['event_date'])) echo $_SESSION['event_date']; ?>">
                                </div><br />
                                Registration Link/Header :<br />
                                <div class="input-field inline">
                                    <input name="c_header" id="c_header" type="text" class="validate" value="<?php if(isset($_SESSION['c_header'])) echo $_SESSION['c_header']; ?>">
                                </div><br />
                                Detailed Information :
                                <div class="row">
                                    <div class="container">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea name="event_details" id="event_details" class="materialize-textarea"><?php if(isset($_SESSION['event_details'])) echo $_SESSION['event_details']; ?></textarea>
                                                    <label for="event_details">Event Details</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                Upload a poster/cover image :
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Poster</span>
                                        <input name="poster" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="poster_path" class="file-path validate" type="text">
                                    </div>
                                </div>
                                <div class="center">
                                    <div class="container">
                                        <input type="submit" value="preview">
                                    </div>
                                    <br/>
                                    <form action="publish.php" method="GET">
                                        <input id="reset" class="deep-orange accent-3" type="submit" name="reset" value="Reset">
                                    </form>
                                </div>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <?php include "includes/footer.php"; ?>

    
    <script src="js/index.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>


        $(document).ready(function () {
            $('.tabs').tabs();
            $('.sidenav').sidenav();
        });

        document.querySelector('#small').addEventListener("click", function () {
            document.getElementsByClassName("ps-card-container").classList.add("change");
        });


    </script>
</body>
</html>