<?php
    session_start();
    include 'database.php';
    include 'uservariable.php';

    $userID = $user['user_id'];
    $userLC = $user['lc_id'];

    $sql_s = "SELECT * FROM assigned_tasks WHERE completed = 0 AND user_id = $userID";
    $results_s = $conn->query($sql_s);
    $in_assigned = $results_s->fetch_assoc();

    if(count($in_assigned) == 0){
        $query = "SELECT task_id FROM tasks WHERE lc_id = $userLC ORDER BY RAND()";
        $result_q = $conn->query($query);
        $new_task = $result_q->fetch_assoc();

        $query_i = "INSERT INTO assigned_tasks (user_id, task_id) VALUES ($userID, $new_task)";
        $result_i = $conn->query($query_i);
    }

    $sql = "SELECT DISTINCT task_id FROM assigned_tasks WHERE completed = 0 AND user_id = $userID";
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