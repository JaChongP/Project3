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

<?php include "./usernav.html" ?>

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

        <div>
        <h4>Tip of the day</h4>

        <?php

            $result = mysqli_query($conn,"SELECT * FROM dailytips order by RAND() limit 1");
 
          
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>

            <tr>
            <td>
            
            <?php $tip = $row['tip_name']; 
            echo "<h4>{$tip}</h4>";

            ?></td>
           
            </tr>
            <?php
            $i++;
            }
 ?>
        
        
        </div>

        <div><h4>Badges</h4></div>
        <div><h4>CO<sub>2</sub> Consumption</h4></div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>