<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NGO</title>
    <link rel="stylesheet" href="ngo.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.html'>NGO NO ONE HAS EVER BECOME POOR BY GIVING</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='home.php'>Home</a></li>

                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form action="ngovalid.php" method="post"id='login' class='input-group-login'>
                    <input type='text' name="nemail"class='input-field'placeholder='Email Id' required >
		    <input type='password' name="npd"class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Email</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form action="ngodb.php" method="post"id='register' class='input-group-register'>
		     <input type='text' name="nname"class='input-field'placeholder='Full Name' required>
		     <input type='text' name="naddress"class='input-field'placeholder='Enter your exact address'  required>
		     <input type='text'name="nphn"class='input-field'placeholder='Mobile Number' required>
		     <input type='email' name="nemail"class='input-field'placeholder='enter your email'required>
			 <input type='text'name="npd"class='input-field'placeholder='Password' required>
			 <input type='text'name="ncpd"class='input-field'placeholder='Confirm Password' required>
		    <label>please upload your ngo registration certificate,</label>
		    <input type="file" name="nsign" placeholder="upload file"/>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>