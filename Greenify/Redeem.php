<?php
    session_start();
    include 'includes/database.php';
    
    $sql = "SELECT * FROM redeem ORDER BY RAND()"; 
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

<?php include "includes/complements/usernav.php" ?>


<section class="stores-heading">
  <div><h1>Stores</h1></div>

    <section class="grid-container">
        <?php   
            while($rows=$result->fetch_assoc()) 
            { 
        ?>
        <div class="store-item">
           <img src="images/Photos/Stores/<?php echo $rows['coupon_image'];?>">
            <h6> <?php echo $rows['discount']; ?> </h6>
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




 <script src="js/script.js"></script>

</body>
</html>