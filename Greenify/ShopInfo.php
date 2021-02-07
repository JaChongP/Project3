<?php
    session_start();
    include 'includes/database.php';
    
    $sql = "SELECT * FROM stores ORDER BY store_id DESC "; 
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
    <div><h1>Stores</h1></div>
        <div class="store-categories">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('Beauty')"> Beauty</button>
            <button class="btn" onclick="filterSelection('Food')"> Food</button>
            <button class="btn" onclick="filterSelection('Clothing')"> Clothing</button>
            <button class="btn" onclick="filterSelection('Interior Design')"> Interior Design</button>
        </div>
    </section>

    <section class="flex-grid">
        
        <?php   
            while($rows=$result->fetch_assoc()) 
            { 
        ?>
            <div class="store-item">
                <img src="images/Photos/Stores/<?php echo $rows['store_image'];?>">
                <h4> <?php echo $rows['store_name']; ?> </h4>
                <h6> <?php echo $rows['store_desc']; ?> </h6>
                <a href="<?php echo $rows['store_website']; ?>" class="green-button">GO TO WEBSITE</a>
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