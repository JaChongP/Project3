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
        <?php

            $result = mysqli_query($conn,"SELECT * FROM dailytips order by RAND() limit 1");
 
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>

            <tr>
            <td>
            
            <?php $tip = $row['tip_name']; 
            echo "<p>{$tip}</p>";

            ?></td>
           
            </tr>
            <?php
            $i++;
            }


            /*
             * $sql = "SELECT task_points FROM tasks"; //select the data
            $result = mysqli_query($conn, $sql); //query it inside the database
            $tasks = array(); //create an empty array 


            if (mysqli_num_rows($result) > 0) {  //if there are more than 0 results, basically if there is any data available
                while($row = mysqli_fetch_assoc($result)) { //run this loop - while we have results from the database, spit it out ($row is the data)
                    
                    $tasks[] = $row; //take the data ($row) and put it inside the $tasks array
                }
            }

            //print_r($tasks);

            foreach ($tasks[0] as $task) {
                echo $task;
            }
             
        *$sql="SELECT ut.user_id, ut.task_id, t.task_name, t.task_points, t.task_value
        *FROM users_tasks ut
        *INNER JOIN tasks t ON ut.task_id = t.task_id 
        *WHERE ut.user_id = " .$_SESSION[id];
        */
 ?>
        

        
        </div>

        <div><h4>Badges</h4></div>
        <div><h4>CO<sub>2</sub> Consumption</h4></div>
    </section>

 <script src="js/script.js"></script>

</body>
</html>