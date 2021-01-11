<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /GitHub/Project3/Greenify/User.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT userid, name, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['userid'];
      header('Location: /GitHub/Project3/Greenify/User.php');
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header" id="Header2">
        <div class="Logo" id="Logo2">
            <a class="Logo" href="HomePage.html"><img src="images/logoGreenify.png" width="60%"></a>
        </div>
        <div class="NavigationBar" id="NB2">
            <nav>
                <ul class="MenuTop">
                    <li><a href="Redeem.html">About</a></li>
                    <li><a href="User.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="SignUp">
        <div class="SignUp">
            <h1>Login</h1>
            <div class="SignUpBox">
                <div>
                    <?php if(!empty($message)): ?>
                        <p> <?= $message ?></p>
                    <?php endif; ?>

                    <form action="Login.php" method="post">
                        <div class="container">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="submit" class="green-button" value="Login">
                        </div>
                    </form>
                    <span>If you already have and account go to<a href="SignUp.php">Sign up</a></span>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>