<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT userid, name, email, password FROM users WHERE userid = :userid');
    $records->bindParam(':userid', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
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
                    <li><a href="User.html"><img src="images/icon-home.png" class="small-icon">Home</a></li>
                    <li><a href="ShopInfo.html"><img src="images/icon-stores.png" class="small-icon">Stores</a></li>
                    <li><a href=""><img src="images/icon-guide.png" class="small-icon">Guide</a></li>
                  </ul>
                </div>
            
            </nav>

            <div class="top-nav-user">
                <ul class="top-nav-user">
                    <li><a href="LogOut.php">Sign Out</a></li>
                    <li><a href="">Redeem</a></li>
                
                </ul>
            </div>
</header>


<section class="profile-top">
    <div>
            <img src="images/Icons/Group 2.png">
    </div>

    <div>
        <?php if(!empty($user)): ?>
            <h2><?= $user['name']; ?></h2>
        <?php endif; ?>
            <h5>Level 10</h5>
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




 <script src="script.js"></script>

</body>
</html>