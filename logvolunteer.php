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
                        <li><a href="ngo.php" target="_self">NGO</a></li>
                        <!--   <li><a href="contactus.html" target="_self">CONTACT US</a></li> -->
        
                    </ul>
                    
    
                </ul>
            </div>
        </div>    
            <div class="content">
                <h1>Welcome to UMDS</h1>
                <p class="par">
                    <quot> 
                            <i>Volunteers do not necessarily have the time;<br> 
                                They have the Heart.<br></i>
                        
                    </quot></p>
                
                <button class="cn"><a href="regvolunteer.php">Join Us</a></button>
				<form action="volvalid.php" method="post">
                <div class="form">
                    <h2>Login form</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="pd" placeholder="Enter Password Here">
                    <button class="btnn"><a href="volunteer.php">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="regvolunteer.php">Join Us</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="login.php"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="login.php"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
				</form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>