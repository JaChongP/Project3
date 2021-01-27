<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
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
<header class="header-about" id="Header1">
        <div class="Logo" id="Logo1">
            <a href="HomePage.html"><img src="images/logoGreenify.png"></a>
        </div>
        <div class="NavigationBar" id="NB1">
            <nav>
                <ul class="MenuTop">
                    <li><a href="About.html">About</a></li>
                    <li><a href="Login.php">Sign in</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="SignUp">
        <div class="SignUp">
            <h1>Sign Up</h1>
            <div class="SignUpBox">
                <div>
                    <form action="Signup.php" method="post">
                        <div class="container">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                        <input type="submit" class="green-button" value="SIGN UP">
                        </div>
                    </form>
                    <span class="sign-up-suggest">Already have an account? <a href="Login.php">Log in</a></span>

                    <?php if(!empty($message)): ?>
                        <p> <?= $message ?></p>
                    <?php endif; ?>
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