<?php

session_start();
include 'database.php';
include 'uservar.php';

    $sql = "SELECT DISTINCT task_id FROM assigned_tasks WHERE user_id = ".$_SESSION['id']." ";
    $results = $conn->query($sql);

    while($assigned_task = $results->fetch_assoc()){
        $assigned_taskID = $assigned_task['task_id'];
        $user_lc = $user['lc_id'];
    
        $sql2 = "SELECT * FROM tasks WHERE task_id NOT IN ($assigned_taskID) AND lc_id = $user_lc ORDER BY RAND()";
        $results2 = $conn->query($sql2);
        $not_assigned = $results2->fetch_assoc();    
    }

    $new_taskID = $not_assigned['task_id'];
    $userID = $_SESSION['id'];

    if(isset($_POST['addtask'])){
        $sqlINSERT = "INSERT INTO assigned_tasks (user_id, task_id) VALUES ($userID, $new_taskID)";
        $resultINSERT = $conn->query($sqlINSERT);

        header("location: ../User.php");
        exit();
    }
?>