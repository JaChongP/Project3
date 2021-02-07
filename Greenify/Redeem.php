<?php
    session_start();
    include 'includes/database.php';
    include 'includes/uservariable.php';
    
    $sql = "SELECT * FROM redeem"; 
    $result = $conn->query($sql); 
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/shopInfo.css">
</head>

<body class="profile-pages">

    <?php include "helpers/header.php"; ?>

    <section class="stores-heading">
        <div><h1>Rewards</h1></div>
        <h5>You have <?php echo $user['user_coins']; ?> coins available</h5>
    </section>

    <section class="flex-grid">
        <?php   
            while($rows=$result->fetch_assoc()) 
            { 
        ?>
            <div class="store-item">
            <img src="images/Photos/Stores/<?php echo $rows['coupon_image'];?>">
                <br>
                <br>
                <h5> Cost: <?php echo $rows['coupon_cost']; ?></h5>
                <h4> <?php echo $rows['discount_store']; ?> </h4>
                <h6> <?php echo $rows['discount_desc']; ?> </h6>
                <form action="includes/redeemcoupon.php" method="post">
                <button type="submit" class="green-button" name="redeem" value=<?php echo $rows['coupon_id']?>>REDEEM</button>
                </form>
            </div>
        <?php 
            } 
        ?> 
 
    </section>

    </div> <!-- close remaining page -->
    </div> <!-- close container -->
    <script src="js/script.js"></script>
</body>
</html>