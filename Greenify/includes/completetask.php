<?php
    session_start();
    include 'database.php';
    include 'uservar.php';

        $sqlASS = "SELECT DISTINCT task_id FROM assigned_tasks WHERE user_id = ".$_SESSION['id']." AND completed = 0";
        $resultsASS = $conn->query($sqlASS);

        while($ass_task = $resultsASS->fetch_assoc()){
            $ass_taskID = $ass_task['task_id'];

            $sqlST = "SELECT * FROM tasks WHERE task_id = $ass_taskID";
            $resultsST = $conn->query($sqlST);
            $row = $resultsST->fetch_assoc();

            $complete_task = null;
        
            if (count($row) > 0) {
            $complete_task = $row;
            }

            $ct_exp = $complete_task['task_exp'];
            $ct_coins = $complete_task['task_coins'];
        }

    if(isset($_POST['assignedtask'])){
        $taskID = $_POST['assignedtask'];


        $sqlUPDATE = "UPDATE assigned_tasks SET completed = 1, completed_date = CURRENT_TIMESTAMP() WHERE task_id = $taskID";
        $resultUPDATE = $conn->query($sqlUPDATE);
        $sqlUPDATE_2 = "UPDATE users SET user_experience = user_experience + $ct_exp, user_coins = user_coins + $ct_coins WHERE user_id = ".$user['user_id']."";
        $resUPDATE_2 = $conn->query($sqlUPDATE_2);

        
        
        header("location: ../User.php");
        exit();
    }
?>