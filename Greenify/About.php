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

    <header class="header-about" id="Header1">
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
                    <li><a href="SignUp.php">Sign Up</a></li>
                    <li><a href="Login.php">Sign In</a></li>
                    <?php  } ?>
                </ul>
            </nav>
        </div>
    </header>

    <div class="GeneralInfo">
        <div class="Information" id="InfoL">
            <h1>About Greenify</h1>
            <p>
                Greenify is a web application about
                sustainability to promote sustainable lifestyles
                and improve quality of life not only for humans
                but for all living beings. Doing so by gamifying
                everyday tasks as a mean of motivation.
            </p>
            <br>
            <p>
                Our users can use our system of tasks assigned to their level
                and curated for their lifestyle, or even create their own.
                These tasks are a mean of motivation for them to make a
                change in their everyday habits. When they complete a certain number
                of tasks our users can redeem coupons on our affilliated stores!
            </p>
            <br>
            <p>
                Greenify's mission is to be the drop in the ocean that can lead
                to change, we intent to make this difference by inspiring our users
                and by showing that small actions can lead to big rewards.
            </p>
            <br>
            <p>
                Our team is looking forward to see this change over time
                and we hope you enjoy our app as much as we are enthusiastic of it.
            </p>
        </div>
        <div class="Information" id="InfoR">
            <img src="images/illustration-main.png">
        </div>
    </div>

    <br><br><br><br><br>

    <div class="GeneralInfo">
        <div class="Information" id="InfoL">
            <h1>Meet the Creators</h1>
        </div>
    </div>

    <div class="FeaturesInfo">
        <section class="Feature inline-photo show-on-scroll">
            <img src="images/photos/goncalo.png">
            <h2>Gonçalo Rabaça</h2>
            <p>
                20 years old, from Lisbon, Portugal and student in IADE - Creative University.
                Enrolled in Creative Technologies and a nature lover.
            </p>
        </section>

        <section class="Feature inline-photo show-on-scroll">
        <img src="images/photos/Josean.png">
            <h2>Josean Portillo</h2>
            <p>
                 Venezuelan, 27 years old and currently studying Creative Technologies in Portugal.
            </p>
        </section>

        <section class="Feature inline-photo show-on-scroll">
            <img src="images/Photos/Juliana.png">
            <h2>Júlíana Björt Ívarsdóttir</h2>
            <p>
                From Iceland, studying multimedia design in Copenhagen, currently doing an exchange semester in Creative Technologies at IADE, Lisbon. 
            </p>
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
