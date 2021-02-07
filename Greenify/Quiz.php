<?php
    session_start();
    include 'includes/database.php';
    include 'includes/uservariable.php';
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
                    <li><a href="About.php">About</a></li>
                    <?php if (isset($_SESSION['loggedin'])) { ?>
                    <li><a href="User.php">Dashboard</a></li>
                    <li><a href="includes/logout.php">Sign Out</a></li>
                    <?php  } else { ?>
                    <li><a href="SignUp.php">Sign Up</a></li>
                    <li><a href="Login.php">Sign In</a></li>
                    <?php  } ?>
                </ul>
            </nav>
        </div>
    </header>
    <main class="SignUp">
        <div class="SignUp">
            <h1>Sign Up</h1>
            <div class="SignUpBox">
                <div>
                <form action="includes/quiz-process.php" method="post" id="quiz">
                    <ul id="test-questions">
                        <li>
                            <div class="quiz-overlay"></div>
                            <h3>How do you commute?</h3>
                            <div class="mtm">
                                <input type="radio" name="q-1-ans" id="q-1-ans-A" value="A" />
                                <label for="q-1-ans-A" class="fwrd labela">a.  Walk/Bike</label>
                            </div>
                            <div>
                                <input type="radio" name="q-1-ans" id="q-1-ans-B" value="B" />
                                <label for="q-1-ans-B" class="fwrd labelb">b.  Public transport</label>
                            </div>
                            <div>
                                <input type="radio" name="q-1-ans" id="q-1-ans-C" value="C" />
                                <label for="q-1-ans-C" class="fwrd labelc">c.  By car</label>
                            </div>
                        </li>
                        <li>
                            <div class="quiz-overlay"></div>
                            <h3>How long do you spend showering on average?</h3>
                            <div class="mtm">
                                <input type="radio" name="q-2-ans" id="q-2-ans-A" value="A" />
                                <label for="q-2-ans-A" class="fwrd labela">a.  5 minutes or less </label>
                            </div>
                            <div>
                                <input type="radio" name="q-2-ans" id="q-2-ans-B" value="B" />
                                <label for="q-2-ans-B" class="fwrd labelb">b.  between 5 and 10 minutes</label>
                            </div>
                            <div>
                                <input type="radio" name="q-2-ans" id="q-2-ans-C" value="C" />
                                <label for="q-2-ans-C" class="fwrd labelc">c.  More than 10 minutes </label>
                            </div>
                        </li>
                        <li>
                            <div class="quiz-overlay"></div>
                            <h3>Do you recycle food packaging?</h3>
                            <div class="mtm">
                                <input type="radio" name="q-3-ans" id="q-3-ans-A" value="A" />
                                <label for="q-3-ans-A" class="fwrd labela">a.  Always</label>
                            </div>
                            <div>
                                <input type="radio" name="q-3-ans" id="q-3-ans-B" value="B" />
                                <label for="q-3-ans-B" class="fwrd labelb">b.  Sometimes</label>
                            </div>
                            <div>
                                <input type="radio" name="q-3-ans" id="q-3-ans-C" value="C" />
                                <label for="q-3-ans-C" class="fwrd labelc">c.  No</label>
                            </div>
                        </li>
                        <li>
                            <div class="quiz-overlay"></div>
                            <h3>Do you usually bring your own reusable bag to the grocery store?</h3>
                            <div class="mtm">
                                <input type="radio" name="q-4-ans" id="q-4-ans-A" value="A" />
                                <label for="q-4-ans-A" class="fwrd labela">a.  Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="q-4-ans" id="q-4-ans-B" value="B" />
                                <label for="q-4-ans-B" class="fwrd labelb">b.  No</label>
                            </div>
                        </li>
                        <li>
                            <div class="quiz-overlay"></div>
                            <h3>Do you buy second hand clothing?</h3>
                            <div class="mtm">
                                <input type="radio" name="q-5-ans" id="q-5-ans-A" value="A" />
                                <label for="q-5-ans-A" class="fwrd labela">a.  Yes, most of the time</label>
                            </div>
                            <div>
                                <input type="radio" name="q-5-ans" id="q-5-ans-B" value="B" />
                                <label for="q-5-ans-B" class="fwrd labelb">b.  Sometimes</label>
                            </div>
                            <div>
                                <input type="radio" name="q-5-ans" id="q-5-ans-C" value="C" />
                                <label for="q-5-ans-C" class="fwrd labelc">c.  No</label>
                            </div>
                        </li>
                        <li>
                            <div class="quiz-overlay"></div>
                            <input type="submit" class="green-button" value="Submit Quiz" id="submit-quiz" />
                        </li>
                    </ul>
                </form> 

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