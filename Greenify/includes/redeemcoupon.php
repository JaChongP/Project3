<?php

    session_start();
    include 'database.php';
    include 'uservar.php';

    $userID = $user['user_id'];

    if(isset($_POST['redeem'])){
        $coupon_id = $_POST['redeem'];

        $sql_in = "INSERT INTO user_redeem (coupon_id, user_id) VALUES ($coupon_id, $userID)";
        $result_in = $conn->query($sql_in);


        $sql_ud = "UPDATE users SET user_coins = user_coins - (SELECT coupon_cost FROM redeem WHERE coupon_id= $coupon_id) WHERE user_id = $userID";
        $result_ud = $conn->query($sql_ud);

        header("location: ../User.php");
        exit();
    }

?>