
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <?php if(isset($_SESSION['uniqid'])){
                        echo "<li><a href='includes/logout.php'>Logout</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>