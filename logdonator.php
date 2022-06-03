<!DOCTYPE html>
<html lang="en">
<head>
    <title> UMDS </title>
    <link rel="stylesheet" href="home.css" type="text/css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">UMDS</h2>
            </div>

            <div class="menu">
                <ul>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="logdonator.php" target="_self">DONATOR</a></li>
                        <li><a href="logvolunteer.php" target="_self">VOLUNTEER</a></li>
                        <li><a href="logngo.php" target="_self">NGO</a></li>
                        <!--   <li><a href="contactus.html" target="_self">CONTACT US</a></li> -->
        
                    </ul>
                    
    
                </ul>
            </div>
        </div>   
		
            <div class="content">
                <h1>Welcome to UMDS</h1>
                <p class="par"> No One Has Ever Become Poor By Giving</p>
                
                <button class="cn"><a href="regdonator.php">Join Us</a></button>
				
                <div class="form">
				<form class="" method="post" action="donarvalid.php">
                    <h2>Login form</h2>
                    <input type="email" name="em" placeholder="Enter Email Here">
                    <input type="password" name="psd" placeholder="Enter Password Here">
                    <button type="submit" class="btn"><a href="donator.php">Login</a></button>
					</form>
                    <p class="link">Don't have an account<br>
                    <a href="regdonator.php">Join Us</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="login.php"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
				
            </div>
			
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>