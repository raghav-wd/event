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
                <?php
                $tot_days = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
                $today = date('j');

                for($i = $today-1; $i<= $tot_days; $i++)
                {   
                    if($i == $today){
                        echo "<li class='tab'><a class='active' href='#test1'>".$i."/".date('m')."/".date('y')."</a></li>";
                    }
                    else {
                        echo "<li class='tab'><a href='#test1'>".$i."/".date('m')."/".date('y')."</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li><a href="publish.php">Publish</a></li>
    </ul>
    
    <div id="test1" class="col s12">Test 1</div>
    
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