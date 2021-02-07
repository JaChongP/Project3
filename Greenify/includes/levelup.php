<?php
    session_start();
    include 'database.php';
    include 'uservariable.php';

    $sql2 = "SELECT * FROM levels WHERE level_id = ".$user['level_id']." ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();

    $levels = null;
        
    if (count($row2) > 0) {
        $levels = $row2;
    }

    if($user['level_id'] == $levels['level_id'] && $user['user_experience'] >= $levels['level_maxexp']){
        $query = "UPDATE users SET level_id = level_id + 1 WHERE user_id = ".$user['user_id']." ";
        $result = $conn->query($query);
        $conn->close();
    } else {
        $user['level_id'] = $levels['level_id'];
    }

    if($user['level_id'] == 6){
        $query2 = "UPDATE users SET lc_id = 2 WHERE user_id = ".$user['user_id']." ";
        $result2 = $conn->query($query2);
    } else if($user['level_id'] == 11){
        $query3 = "UPDATE users SET lc_id = 3 WHERE user_id = ".$user['user_id']." ";
        $result3 = $conn->query($query3);
    }
?>