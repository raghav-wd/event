<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Publish SRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>
<body>

    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </nav>


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
                    <form action="preview.php" method="GET">
                        <div class="card-panel teal">
                            <span class="white-text">
                                Event Title: <br />
                                <div class="input-field inline">
                                    <input name="event_title" id="event_title" type="text" class="validate">
                                </div><br />
                                Date : <br />
                                <div class="input-field inline">
                                    <input name="event_title" id="event_title" type="text" class="validate">
                                </div><br />
                                Registration Link/Header :<br />
                                <div class="input-field inline">
                                    <input name="c_header" id="c_header" type="text" class="validate">
                                </div><br />
                                Detailed Information :
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="event_details" id="event_details" class="materialize-textarea"></textarea>
                                                <label for="event_details">Event Details</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                Upload a poster/cover image :
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Poster</span>
                                        <input name="poster" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                                <input type="submit" value="preview">
                            </span>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    
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