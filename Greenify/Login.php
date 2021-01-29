<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
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
    <footer>

    </footer>
</body>
</html>