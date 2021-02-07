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
            <a href="index.php"><img src="images/logoGreenify.png"></a>
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

    <main>

        <div id="tabContainer" class="tabContainer">
            <div class="tabs" id="tabs">
              <ul data-current="1"> 
                <li id="tabHeader_1" class="tabActiveHeader">Welcome to Greenify</li> 
                <li id="tabHeader_2">Your Dashboard</li>
                <li id="tabHeader_3">Stores</li>
                <li id="tabHeader_4">Redeem Coins</li>
                <li id="tabHeader_5">Greenify Guide</li>
              </ul>
          
          
            </div>
            <div id="tabscontent" class="tabscontent">
              <div class="tabpage" id="tabpage_1">
                <img src="images/tutorial.png" alt="tutorial-image" class="tutorial-img"> 
                <h2>Welcome to Greenify</h2>
                <p>Congratulations! You’re one step closer to creating a more 
                    sustainable earth. Let’s go over a few things to help you get started. </p>
                    <img src="images/progress.png" class="progress-bar">
                    <div class="button-container">
                        <div class="gototab" onclick="nextTab()"><button>NEXT</button></div>
                      </div>
              </div>


              <div class="tabpage" id="tabpage_2" style="display:none;">
                <img src="images/tutorial.png" alt="tutorial-image" class="tutorial-img"> 
                <h2>Your Dashboard</h2>
                <p>
                    On your dashboard you have an overview of your daily tasks, you can get tips and 
                    keep track of your progress, rewards and CO2 consumption.
                </p>
                <img src="images/progress2.png" class="progress-bar">
                <div class="button-container">
                    <div class="gototab" onclick="nextTab()"><button>NEXT</button></div>
                  </div>
              </div>


              <div class="tabpage" id="tabpage_3" style="display:none;">
                <img src="images/tutorial.png" alt="tutorial-image" class="tutorial-img"> 
                <h2>Eco Friendly Stores</h2>
                <p>
                    We've teamed up with some of the eco friendliest stores in town!
                    Get an overview of eco friendly stores in your city so you know where to go shopping.
                </p>
                <img src="images/progress3.png" class="progress-bar">
                <div class="button-container">
                    <div class="gototab" onclick="nextTab()"><button>NEXT</button></div>
                  </div>
              </div>

              <div class="tabpage" id="tabpage_4" style="display:none;">
                <img src="images/tutorial.png" alt="tutorial-image" class="tutorial-img"> 
                <h2>Redeem Coins</h2>
                <p>
                    For every task you complete you get rewarded with Greenify coins, 
                    which you can redeem to get discount coupons in our partnering stores 
                </p>
                <img src="images/progress4.png" class="progress-bar">
                <div class="button-container">
                    <div class="gototab" onclick="nextTab()"><button>NEXT</button></div>
                  </div>
              </div>


              <div class="tabpage" id="tabpage_5" style="display:none;">
                <img src="images/tutorial.png" alt="tutorial-image" class="tutorial-img"> 
                <h2>Greenify Guide</h2>
                <p>
                    We know how hard it can be to get started so we've made an in-depth 
                    guide on the best sustainable practices at home and on the go.
                </p>
                <img src="images/progress5.png" class="progress-bar">
                <div class="button-container">
                    <div class="gototab"><a href="Login.php"><button>NEXT</button></a></div>
                  </div>
              </div>

            </div>

           
            </div>

    </main>

    <!--
        to add previous button:
        <div class="gototab" onclick="prevTab()"><button>PREVIOUS</button></a></div> --> 



        <footer class="footer-tutorial">

            <div class="footer-icons">
    
                <img src="images/icon-facebook.svg">
                <img src="images/icon-instagram.svg">
                <img src="images/icon-linkedin.svg">
    
            </div>
    
            <div>
                <p>© 2020 Greenify. All rights reserved </p>
            </div>
    
        </footer>
    
        <script src="js/script.js"></script>
    
    </body>
    </html>
    