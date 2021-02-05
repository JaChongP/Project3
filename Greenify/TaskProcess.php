<?php

include 'includes/database.php';

if(sizeof($_POST['task'])>0){ //eru gögn? 
    foreach($_POST['task'] as $task) {
        $sql = "INSERT INTO users_tasks (user_id, task_id) ";
        $sql .= "VALUES(".$_POST["user_id"].",".$task."); ";
        if ($conn->query($sql) === FALSE) {
            die($conn->error);
          }
        
    }
}

header("Location:/Greenify/User.php");

 //echo "<pre>"; print_r ($_POST); die();
