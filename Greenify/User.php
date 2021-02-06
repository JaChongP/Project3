<?php

    session_start();
    include 'includes/database.php';
    include 'includes/levelup.php';
    include 'includes/assigntask.php';
    include 'includes/completetask.php';
    include 'includes/uservar.php';

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
</head>
<body class="user-page">

<?php include "includes/complements/usernav.php" ?>

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
                         <lable for='assignedtask'> ". $assigned['task_desc'] . " </lable><br>";
                        }
                    } ?>
                </form>
                <form action="includes/assigntask.php"  method="post">
			        <input type="submit" class="green-button" name="addtask" value="add_newtask">
		        </form>
<!-- for each task that is "checked" add 1 to total number of tasks" --> 
        </div>
        <label for=""></label>

        <div>
            
            <h4>Progress</h4>
        
            <h4>Tasks</h4>

        </div>


        
    
    
        <div id="rewards-section">
                <h4>Rewards</h4>
                <img src="images/coin.png">
                <h1><?php echo $user['user_coins'];?></h1>

        </div>

        <div>
        <h4>Tip of the day</h4>


        
        </div>

        <div><h4>Badges</h4></div>
        <div><h4>CO<sub>2</sub> Consumption</h4></div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>