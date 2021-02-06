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

        <div>
            <h4>Tasks</h4>

        <?php

            //get the tasks from the database
          $sql = "SELECT * FROM tasks ORDER BY task_id;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
             
        ?>

<!-- add action -TaskProcess.php so when you press submit the data is sent and processed by the code in the file TaskProcess.php 
the file TaskProcess spits out the number of tasks
-->
 

<form method="post" action="TaskProcess.php"> 
    <?php

//while there is any data echo the tasks with checkboxes
if ($resultCheck > 0) {
    
            while ($row = mysqli_fetch_assoc($result)) { //run this loop - while we have results from the database, spit it out ($row is the data)
                    //echo "<pre>"; print_r ($row); die();
  
            
            echo "<input type='checkbox' value='".$row['task_id']."' name='task[]' id='checkbox_".$row['task_id']."'/>";
            echo "<label for='checkbox_".$row['task_id']."'>" .$row ['task_name']."</label><br/>";
             
            }
        }
    ?>

    <!-- ??? -->
    <input type="hidden" name="user_id" value="<?=$_SESSION['id']?> "/>

    <input type="submit" class="green-button" value="SUBMIT" name="submit">

</form>
        
        </div>
        <div>
            
    <h4>Progress</h4>
    
        <h4>Tasks</h4>


        <?php

        
        $sql= "SELECT COUNT(ut.task_id) FROM users_tasks ut WHERE ut.user_id = ".$_SESSION[id];
        $result = mysqli_query($conn, $sql);
        $numberOfTasks = $result->fetch_row()[0];
        //echo "<pre>"; print_r ($numberOfTasks); die();
        
        ?>
        <h1><?=$numberOfTasks;?></h1>

    </div>

    
    <div id="rewards-section">
            <h4>Rewards</h4>
        
            <?php

$sql= "SELECT SUM(t.task_points) FROM users_tasks ut INNER JOIN tasks t ON t.task_id=ut.task_id WHERE ut.user_id = ".$_SESSION[id];
        $result = mysqli_query($conn, $sql);
        $numberOfCoins = $result->fetch_row()[0];
        //echo "<pre>"; print_r ($numberOfCoins); die();
        
        ?>

        
        <img src="images/coin.png">
        <h1><?=$numberOfCoins;?></h1>
    
        
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
            echo "<h4>{$tip}</h4>";

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