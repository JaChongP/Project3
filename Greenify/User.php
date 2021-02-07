<?php

    session_start();
    include 'includes/database.php';
    include 'includes/uservariable.php';
    include 'includes/assigntasks.php';
    include 'includes/completetask.php';
    include 'includes/levelup.php';

    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit;
    }

    $sqlASSIGNED = "SELECT DISTINCT task_id FROM assigned_tasks WHERE user_id = ".$_SESSION['id']." AND completed = 0";
    $resultsASSIGNED = $conn->query($sqlASSIGNED);

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
<body class="user-page">
<?php include "helpers/header.php"; ?>


<section class="profile-top">
    <div>
            <img src="images/Icons/Group 2.png">
    </div>

    <div>
        <h2><?php echo $user['user_name'];?></h2>

        <h5>Level <?php echo $user['level_id'];?></h5>
        <h5>Earth Warrior</h5>
    </div>
</section>

    <section class="grid-container">
        <div>
            <h4>Tasks</h4>
                <form action="includes/completetask.php"  method="post">
                    <?php while($assigned_task = $resultsASSIGNED->fetch_assoc()){
                        $assigned_taskID = $assigned_task['task_id'];

                        $sqlSELECT = "SELECT * FROM tasks WHERE task_id = $assigned_taskID";
                        $resultsSELECT = $conn->query($sqlSELECT);
                    
                        while($assigned = $resultsSELECT->fetch_assoc()){ 
                        echo "<input type='checkbox' onChange='submit();' name='assignedtask' value='". $assigned['task_id'] ."'>
                         <lable for='assignedtask'> ". $assigned['task_desc'] . " </lable><br><br>";
                        }
                    } ?>
                </form>
                <form action="includes/assigntasks.php"  method="post">
			        <input type="submit" class="green-button" name="addtask" value="Add new task">
		        </form>
        </div>

        <div><h4>Progress</h4>
            <h5>Experience</h5>
                <h1>XP <?php echo $user['user_experience']?></h1>
                <p>You need <?php echo $levels['level_maxexp']?> pts to level Up</p>

            <h5>Completed Tasks</h5>
            <?php
                $sql= "SELECT COUNT(task_id) FROM assigned_tasks WHERE completed = 1 AND user_id = ".$user['user_id'];
                $result = mysqli_query($conn, $sql);
                $numberOfTasks = $result->fetch_row()[0];
                //echo "<pre>"; print_r ($numberOfTasks); die();
            ?>
                <h1><?=$numberOfTasks;?></h1>
        </div>

        <div><h4>Rewards</h4>
            <img src="images/coin.png">
            <h1><?php echo $user['user_coins'];?></h1>
        </div>
        
        <div>
            <h4>Tip of the day</h4>
            <?php
                $result = mysqli_query($conn,"SELECT * FROM dailytips order by RAND() limit 1");
                $i=0;
                while($row = mysqli_fetch_array($result)) {  
                    $tip = $row['tip_name'];  
                ?>
                <tr>
                <td>
                <?php echo "<p>{$tip}</p>";?></td>
                </tr>
                <?php
                $i++;
                } ?>
            </div>

        <div><h4>Badges</h4></div>

        <div>
            <h4>Coupons Redeemed</h4>
                <?php
                    $sql = "SELECT * FROM user_redeem WHERE user_id = $userID";
                    $results = $conn->query($sql);

                    while($userCoupon = $results->fetch_assoc()){
                        $userCouponID = $userCoupon['coupon_id'];

                        $sql_s = "SELECT * FROM redeem WHERE coupon_id = $userCouponID";
                        $result_s = $conn->query($sql_s);
                        while($rows = $result_s->fetch_assoc()) {
                            $discount = $rows['discount'];
                            $discount_store = $rows['discount_store'];
                            $discount_image = $rows['discount_image'];
                    }
                ?>
                <h6><?php echo $discount;?></h6>
                <h5><?php echo $discount_store;?></h5>
                <a download="qr.png" href="images/Photos/cupons/<?php echo $discount_image;?>">Download QR</a>

                <?php } ?>
        </div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>