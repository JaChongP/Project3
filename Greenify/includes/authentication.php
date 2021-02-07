<?php
    session_start();
    include 'database.php';

   
    if ( !isset($_POST['email'], $_POST['password']) ) {      
        exit('Please fill both the username and password fields!');
    }

    if ($stmt = $conn->prepare('SELECT user_id, user_name, user_password FROM users WHERE user_email = ?')) {
        
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $password);
            $stmt->fetch();
            
            if (password_verify($_POST['password'], $password)) {
                
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['id'] = $id;
                header('Location: ../User.php');
            } else {
                echo 'Incorrect username and/or password!';
            }
        } else {            
            echo 'Incorrect username and/or password!';
        }

        $stmt->close();
    }
?>