<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/framework.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <title>Events SRM</title>
</head>

<body>

    <!--Extended Navbar with tabs-->
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="publish.php">Publish</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a href='#search'>Search</a></li>
                <li class='tab'><a class='active' href='#test24'>24/12/18</a></li>
                <li class='tab'><a href='#test26'>26/12/18</a></li>
               
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="publish.php">Publish</a></li>
    </ul>



    <input type="text" name="found-tags" onkeyup="etag(this)" id="found-tags" placeholder="Found-tags" />
                                    <div class="chips-container">
                                        
                                    </div>









    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://stufflost.xyz">StuffLost.xyz</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Events SRM
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>


                var chip_b = document.querySelector(".chips-container");
                var i = 1;
            function etag(tag_v){
                var ftag = document.querySelector('#found-tags');
                    var text = tag_v.value;
                    var len = text.length;
                    if (text.charAt(len - 1) == ' ')//checks if last char entered is space and then makes the text
                    {
                    chip_b.innerHTML += "<div class='chip'><span class='chip-text'><input type='text' name='chip-text-" + i + "' value='" + text + "' style='width: 55px;border:none;padding-left:6px;font-size: 14px;'/></span><i onclick='dec_close()' class='close'>&times;</i></div>";
                tag_v.value = "";
                i++;
            }
        }
                function dec_close(){
                    i--;
                }

        document.querySelector('#small').addEventListener("click", function () {
            document.getElementsByClassName("ps-card-container").classList.add("change");
        });

    </script>
</body>

</html>