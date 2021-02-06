<?php
    session_start();
    include './database.php';
    include 'uservar.php';

      $sql2 = "SELECT * FROM levels WHERE level_id = ".$user['user_level']." ";
      $result2 = $conn->query($sql2);
      $row2 = $result2->fetch_assoc();

      $levels = null;
      
      if (count($row2) > 0) {
        $levels = $row2;
      }

      $level_cat = $levels['lc_id'];

      $sql3 = "SELECT * FROM tasks WHERE lc_id = $level_cat ORDER BY RAND() LIMIT 5";
      $result3 = $conn->query($sql3);
      $row3 = $result3->fetch_assoc();

      $tasks = null;
      
      if (count($row3) > 0) {
        $tasks = $row3;
      }

      if($user['user_level'] == $levels['level_id'] && $user['user_experience'] >= $levels['level_maxexp']){
        $query = "UPDATE users SET user_level = user_level + 1 WHERE user_id = ".$user['user_id']." ";
        $result = $conn->query($query);
        $conn->close();
      } else {
        $user['user_level'] = $levels['level_id'];
      }

?>