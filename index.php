<?php
    include "includes/config.php";
    include "includes/header.php";
?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <title>Wen | Find upcoming events</title>
</head>
<body>

    <?php include "includes/home_header.php"?>

    <div id="search" class="col s12">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <form action="searched.php" method="GET">
                        <div class="input-field col s11 l11">
                            <i class="material-icons prefix">search</i>
                            <input name="search" type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Autocomplete</label>
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

            $('input.autocomplete').autocomplete({
                data: {
                    //CS Fields
                    "Artificial_Intelligence": null,
                    "Machine_Learning": null,
                    "Web_Development": null,
                    "Web_Dev": null,
                    "Automotive": null,
                    //Coding Languages
                    "Block_Chain": null,
                    "Python": null,
                    "Ruby": null,
                    "Android": null,
                    "C": null,
                    "C++": null,
                    "C#": null,
                    "Django": null,
                    "Java": null,
                    "Larvel": null,
                    "MongoDB": null,
                    "Ruby": null,
                    "Swift": null,
                    "": null,
                    //Softwares
                    "Android_Studio": null,
                    "Autocad": null,
                    "Blender": null,
                    "Maya": null,
                    "Illustrator": null,
                    "Photoshop": null,
                    "Premier_Pro": null,
                    "After_Effects": null,

                },
            });
        });

        document.querySelector('#small').addEventListener("click", function () {
            document.getElementsByClassName("ps-card-container").classList.add("change");
        });


    </script>
</body>
</html>