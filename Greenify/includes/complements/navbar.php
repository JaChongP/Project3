<?php 
    session_start();
    include './database.php';

?>

<header class="header" id="Header1">
        <div class="Logo" id="Logo1">
            <a href="index.php"><img src="images/logoGreenify.png"></a>
        </div>
        <div class="NavigationBar" id="NB1">
            <nav>
                <ul class="MenuTop">
                    <li><a href="About.php">About</a></li>
                    <?php if (isset($_SESSION['loggedin'])) { ?>
                    <li><a href="User.php">Dashboard</a></li>
                    <li><a href="includes/LogOut.php">Log Out</a></li>
                    <?php  } else { ?>
                    <li><a href="Login.php">Sign In</a></li>
                    <?php  } ?>
                </ul>
            </nav>
        </div>
    </header>