<?php
    session_start();
    include 'includes/database.php';
    include 'includes/uservariable.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="bg">

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
                    <li><a href="includes/logout.php">Sign Out</a></li>
                    <?php  } else { ?>
                    <li><a href="Login.php">Sign In</a></li>
                    <?php  } ?>
                </ul>
            </nav>
        </div>
    </header>


       
        <div class="GeneralInfo">
            <div class="Information" id="InfoL">
                <h1>Be a part of the solution <br>not the pollution</h1>
                <p>Join us in making the world a better place, one task at a time. 
                    Discover new ways to be sustainable with the Greenify guide and 
                    keep track of your daily sustainability tasks in a fun way.</p>
                <br>
                <a href="SignUp.php" class="green-button">GET STARTED</a>
            </div>
            <div class="Information" id="InfoR">
                <img src="images/illustration-main.png">
            </div>
        </div>

    </div>

    <!-- <div class="heading"><h1>Features</h1></div> --> 

        <div class="FeaturesInfo">

            <section class="Feature inline-photo show-on-scroll">
                <img src="images/icon-tasks.png">
                <h2>Personalized tasks</h2>
                <p>Take an assessment quiz to determine which tasks suit you best. 
                    Manage tasks easily with the option to create or delete tasks according to your preference. </p>
            </section>

            <section class="Feature inline-photo show-on-scroll">
                <img src="images/icon-rewards.png">
                <h2>Earn rewards</h2>
                <p>
                    Earn rewards when completing tasks and share them with your friends on social media. 
                    Use your rewards to redeem discount vouchers at our partnering stores.</p>
            </section>

            <section class="Feature inline-photo show-on-scroll">
                <img src="images/icon-impact.png">
                <h2>Track your impact</h2>
                <p>Get an extra motivation boost everytime you complete a task by tracking your impact. 
                    We’ll make sure you know exactly how you made a difference in the world.</p>
            </section>

        </div>

   

   


<footer>


    <div class="footer-icons">

            <img src="images/icon-facebook.svg">
            <img src="images/icon-instagram.svg">
            <img src="images/icon-linkedin.svg">

    </div>

    <div>
            <p>© 2020 Greenify. All rights reserved </p>
    </div>

 </footer>

 <script src="js/script.js"></script>

</body>
</html>
