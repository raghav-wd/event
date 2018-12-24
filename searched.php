<?php

include "includes/config.php";

$search = $_GET['search'];


// chip_text_1, chip_text_2, chip_text_3, chip_text_4
?>
<?php
    include "includes/config.php";
    include "includes/header.php";
?>
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
                <?php
                $tot_days = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
                $today = date('j');

                for($i = $today-1; $i<= $tot_days; $i++) //creates a callender
                {
                    $sql = "SELECT * FROM posts WHERE event_date LIKE '$i%'";
                    $res = mysqli_query($conn, $sql);
                    $num_arrays = mysqli_num_rows($res);

                    if($num_arrays != '0')
                    {
                        
                            if($i == $today){
                                echo "<li class='tab'><a class='active' href='#test".$i."'>".$i."/".date('m')."/".date('y')."</a></li>";
                            }
                            else {
                                echo "<li class='tab'><a href='#test".$i."'>".$i."/".date('m')."/".date('y')."</a></li>";
                            }
                        }
                }
                ?>
            </ul>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li><a href="publish.php">Publish</a></li>
    </ul>
    
    <?php 
        for($i = $today-1; $i<= $tot_days; $i++) //prints the event day-wise
        {
            $sql = "SELECT * FROM posts WHERE event_date LIKE '$i%'";
            $res = mysqli_query($conn, $sql);
            $num_arrays = mysqli_num_rows($res);

            if($num_arrays != '0')
            {
                echo "<div id='test".$i."' class='col s12'>";
                for($j =1; $j<=$num_arrays; $j++)
                {
                    $row = mysqli_fetch_assoc($res);
                    if($row['event_title'] != "")
                    {
                        
            
                        echo    
                                    "<div class='center'>
                                        <div class='container' style='text-align: left;'>
                                            <div class='card medium'>
                                                <div class='card-image waves-effect waves-block waves-light'>
                                                    <img class='activator' src=''>
                                                </div>
                                                <div class='card-content'>
                                                    <span class='card-title activator grey-text text-darken-4'>"
                                                        .$row['event_title']."
                                                        <br/>"
                                                        .$row['event_date']."
                                                        <i class='material-icons right'>more_vert</i>
                                                    </span>
                                                    <p><a href='".$row['event_url']."'>".$row['event_url']."</a></p>
                                                </div>
                                                <div class='card-reveal'>
                                                    <span class='card-title grey-text text-darken-4'>".$row['event_title']."<i class='material-icons right'>close</i></span>
                                                    <p>".$row['event_details']."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                            
                    }
                }
                echo "</div>";
            }  
        }
    

        

    ?>

    <div id="search" class="col s12">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <form action="searched.php" method="GET">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">textsms</i>
                            <input name="search" type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Autocomplete</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
            
            $sql = "SELECT * FROM posts WHERE event_title LIKE '$search%' OR chip_text_1 LIKE '$search%' OR chip_text_2 LIKE '$search%' OR chip_text_3 LIKE '$search%' OR chip_text_4 LIKE '$search%'";
            $res = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($res);

            if($num_rows != 0)
                        for($i = 1; $i<=$num_rows; $i++)
                        {
                            $row = mysqli_fetch_assoc($res);

                            echo "<div class='center'>
                                        <div class='container' style='text-align: left;'>
                                            <div class='card medium'>
                                                <div class='card-image waves-effect waves-block waves-light'>
                                                    <img class='activator' src=''>
                                                </div>
                                                <div class='card-content'>
                                                    <span class='card-title activator grey-text text-darken-4'>"
                                                        .$row['event_title']."
                                                        <br/>"
                                                        .$row['event_date']."
                                                        <i class='material-icons right'>more_vert</i>
                                                    </span>
                                                    <p><a href='".$row['event_url']."'>".$row['event_url']."</a></p>
                                                </div>
                                                <div class='card-reveal'>
                                                    <span class='card-title grey-text text-darken-4'>".$row['event_title']."<i class='material-icons right'>close</i></span>
                                                    <p>".$row['event_details']."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                        
                        }

             

        ?>

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