<?php
    session_start();
    include 'database.php';
    include 'uservariable.php';

    $userID = $user['user_id'];
    $userLC = $user['lc_id'];

    $sql_s = "SELECT task_id FROM tasks WHERE lc_id = $userLC AND task_id NOT IN(SELECT task_id FROM assigned_tasks WHERE completed = 0 AND user_id = $userID) ORDER BY RAND()";
    $results_s = $conn->query($sql_s);
    $not_assigned = $results_s->fetch_assoc();
    
        $new_task = $not_assigned['task_id'];


    if(isset($_POST['addtask'])){
        $sqlINSERT = "INSERT INTO assigned_tasks (user_id, task_id) VALUES ($userID, $new_task)";
        $resultINSERT = $conn->query($sqlINSERT);

        header("location: ../User.php");
        exit();
    }
?>