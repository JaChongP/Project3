<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
<?php include "includes/complements/navbar.php" ?>
    <main class="SignUp">
        <div class="SignUp">
            <h1>Login</h1>
            <div class="SignUpBox">
                <div>

                    <form action="includes/authentication.php" method="post">
                        <div class="container">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="submit" class="green-button" value="LOG IN">
                        </div>
                    </form>
                    <span class="sign-up-suggest">Don't have an account? <a href="SignUp.php">Sign up</a></span>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </main>
    <?php include "includes/complements/footer.php" ?>
</body>
</html>