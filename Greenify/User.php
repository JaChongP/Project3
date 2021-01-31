<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
include 'includes/database.php';
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: HomePage.html');
	exit;
} else {
// We don't have the usrname or the experience info stored in sessions so instead we can get the results from the database.
$stmt = $conn->prepare('SELECT user_name, user_experience FROM users WHERE user_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($name, $experience);
$stmt->fetch();
$stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="user-page">

   <header>    
            <nav>
                </div>

                <div class="side-nav">
                <ul class="side-nav">
                    <li><div class="logo-white">
                        <img src="images/logo-white.png">
                    </div></li>
                    <li><a href="User.php"><img src="images/icon-home.png" class="small-icon">Dashboard</a></li>
                    <li><a href="ShopInfo.php"><img src="images/icon-stores.png" class="small-icon">Stores</a></li>
                    <li><a href="Redeem.php"><img src="images/icon-redeem.png" class="small-icon">Redeem</a></li>
                    <li><a href="guide.html"><img src="images/icon-guide.png" class="small-icon">Guide</a></li>
                    <li><a href="help.html"><img src="images/icon-help.png" class="small-icon">Help</a></li>
                    <li><a href="Quiz.php"><img src="images/icon-help.png" class="small-icon">Quiz</a></li>
                  </ul>
                </div>
            
            </nav>

            <div class="top-nav-user">
                <ul class="top-nav-user">
                    <li><a href="LogOut.php">Sign Out</a></li>
                </ul>
            </div>
</header>


<section class="profile-top">
    <div>
            <img src="images/Icons/Group 2.png">
    </div>

    <div>
            <h2><?= $name ?></h2>

            <h5>Your actual experience is: <?= $experience ?> pts!</h5>
            <h5>Earth Warrior</h5>
    </div>
</section>

    <section class="grid-container">
        <div><h4>Tasks</h4></div>
        <div><h4>Progress</h4></div>
        <div><h4>Rewards</h4></div>
        <div><h4>Activity log</h4></div>
        <div><h4>Badges</h4></div>
        <div><h4>CO<sub>2</sub> Consumption</h4></div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>