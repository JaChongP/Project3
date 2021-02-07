<?php

    session_start();
    include 'database.php';
    include 'uservar.php';

    $userID = $user['user_id'];


    if(isset($_POST['redeem'])){
        $coupon_id = $_POST['redeem'];

        $sql_in = "INSERT INTO user_redeem (coupon_id, user_id) VALUES ($coupon_id, $userID)";
        $result_in = $conn->query($sql_in);
        $conn->close();

        header("location: ../User.php");
        exit();
    }

?>