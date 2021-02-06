<?php
    session_start();
    include './database.php';

    
    if (isset($_SESSION['loggedin'])) {
        $sql = "SELECT * FROM users WHERE user_id = ".$_SESSION['id']." ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $user = null;
    
        if (count($row) > 0) {
          $user = $row;
        }
    }
?>