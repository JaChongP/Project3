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
    
</head>
<body class="user-page">
<?php include "helpers/header.php"; ?>


<section class="profile-top">
    <div>
            <img src="images/avatar.png">
    </div>

    <div>
        <h2><?php echo $user['user_name'];?></h2>

        <h5>Level <?php echo $user['level_id'];?></h5>
        <h5>Earth Warrior</h5>
    </div>
</section>

    <section class="grid-container">
        <div id="tasks" class="dashboard-box">
            <h4>Tasks</h4>
                <form action="includes/completetask.php"  method="post">
                    <?php while($assigned_task = $resultsASSIGNED->fetch_assoc()){
                        $assigned_taskID = $assigned_task['task_id'];

                        $sqlSELECT = "SELECT * FROM tasks WHERE task_id = $assigned_taskID";
                        $resultsSELECT = $conn->query($sqlSELECT);
                    
                        while($assigned = $resultsSELECT->fetch_assoc()){ 
                        echo "<input type='checkbox' onChange='submit();' name='assignedtask' value='". $assigned['task_id'] ."'>
                         <label for='assignedtask'> ". $assigned['task_desc'] . " </label><br><br>";
                        }
                    } ?>
                </form>
                <form action="includes/assigntasks.php"  method="post">
			        <input type="submit" class="green-button" name="addtask" value="ADD TASK">
		        </form>
        </div>



        <div id="progress" class="dashboard-box">
            
        <h4>Progress</h4>

                <section class="progress-section">
                    
                <section class="experience">
                <h5>Experience</h5>
                        <h2><?php echo $user['user_experience']?>xp</h2>
                        <h6>You need <?php echo $levels['level_maxexp']?> xp to level up!</h6>
                </section>
        
        <section class="completed-tasks">

                <h5>Tasks</h5>
                <?php
                    $sql= "SELECT COUNT(task_id) FROM assigned_tasks WHERE completed = 1 AND user_id = ".$user['user_id'];
                    $result = mysqli_query($conn, $sql);
                    $numberOfTasks = $result->fetch_row()[0];
                    //echo "<pre>"; print_r ($numberOfTasks); die();
                ?>
                    <h2><?=$numberOfTasks;?></h2>
               
                    </section>
                </section>

                
                <img src="images/progress-graph.png">
        </div>



        <div id="rewards" class="dashboard-box">
            
        
        <h4>Rewards</h4>
            
            <section class="rewards-section">

                <section class="coins-section">
                    <img src="images/coin.png" id="coin-img">
                    <h2><?php echo $user['user_coins'];?></h2>
                
                </section>

                    <section class="badge-section">
                    <img src="images/badge.png" id="badge-img">
                    <h2>3</h2>
                
                </section>


            </section>
        </div>

        
        <div class="dashboard-box">

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

        <div id="badges" class="dashboard-box">
            
        <h4>Badges</h4>

        <section class="badge-container">

                <img src="images/badge.png">
                <img src="images/badge.png">
                <img src="images/badge.png">

            </section>
    </div>

        <div id="coupons" class="dashboard-box">

            <h4>Coupons</h4>
            <section class="coupons-section">
                <?php
                    $sql = "SELECT * FROM user_redeem WHERE user_id = $userID LIMIT 3";
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
                
                <h5><?php echo $discount;?></h5>
                <h5><?php echo $discount_store;?></h5>
               
                <button><a download="qr.png" href="images/Photos/cupons/<?php echo $discount_image;?>">QR CODE</a></button>

                <?php } ?>
                </section> 
        </div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>