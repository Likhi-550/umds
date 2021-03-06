<!DOCTYPE html>
<html lang="en">
<head>
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
outline:none;
}
body{
background-image:url("");
background-repeat:No repeat;
background-position:center;
background-size:cover;
background-color:#fff;
font-family:"Open Sans",sans-serif;
height:100vh;
display:flex;
align-item:center;
justify-content:center;
}
.container{
margin:auto;
bg-color:#fff;
border-radius:5px;
box-shadow:0 2px 10px rgba(0,0,0,0.3);
padding:80px 40px;
}
.container h1{
text-align:center;
margin:0 0 20px;
font-size:24px;
}
.input{
margin-bottom:20px;
position:relative;
}
.input label{
display:block;
margin-bottom:10px;
}
.input input{
width:100%;
height:40px;
padding:0 15px;
background-color:#fff;
border:2px solid #f0f0f0;
border-radius:5px;
}
.input small{
display:block;
color:#e74c3c;
font-weight:bold;
font-size:11px;
padding-top:3px;
visibility:hidden;
}
.input.success input{
border:2px solid #2ecc71;
}
.input.error input{
border:2px solid #e74c3c;
}
.input.error small{
visibility:visible;
}
.btn{
width:100%;
height:40px;
line-height:40px;
background-color:#4CAF50;
border:1px solid #3498db;
border-radius:5px;
cursor:pointer;
color:#fff;
display:block;
font-size:16px;
}
.btn:hover{
opacity:1;
}
</style>

</head>
<body>  
<div class="container">  
<center><h1>DONAR REGISTRATION FORM</h1></center>
<form action="donardb.php" id="form" method="post" class="form">  
<div class="input">
<label for="fn"><b> First Name</b></label>  
<input type="text" name="fn" placeholder= "Ex: abc" id="fn" autocomplete="off" required />  
<small>Error message</small>
</div>
<div class="input">
<label for="ln"><b>Last Name</b></label>  
<input type="text" name="ln" placeholder= "Ex: xyz" id="ln" autocomplete="off" required />  
<small>Error message</small>
</div>
<div class="input">
<label for="em"><b>E-Mail(User Name)</b></label>    
<input type="text" name="em" placeholder="Ex: abc123@gmail.com"id="em" autocomplete="off" required />
<small>Error message</small>
</div>
<div class="input">
<label for="psd"><b>Password</b></label>  
<input type="password" placeholder="make sure you remember" name="psd" id="psd" autocomplete="off" required />
<small>Error message</small>
</div>
<div class="input">
<label for="cpsd"><b>Confirm Password</b></label>  
<input type="password" placeholder="" name="cpsd" id="cpsd" autocomplete="off" required />
<small>Error message</small>
</div>
<div>
<label for="gender"><b>Gender</b></label><br>
<input type="radio" value="male" name="gender" id="gender">  Male<br>  
<input type="radio" value="female" name="med" id="gender">  Female <br><br>
</div>
<div class="input">
<label for="ph"><b>Mobile Number</b></label>  
<input type="text" name="ph"  placeholder="+91" size="10"id="ph" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
<div class="input">
<label for="bgp"><b>Blood group</b></label>  
<input type="text" name="bgp"  placeholder="Ex: A positive" size=""id="bgp" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
<div class="input">
<label for="address"><b>Address</b></label>
<textarea cols="80" rows="5" name="dadd" placeholder=" Address" value="address"id="dadd" autocomplete="off" required></textarea>
<small>Error message</small>
</div>
<button type="submit" class="btn"><b>Submit</b></button>
</div>  
</form>  
</div>
</body>
</html>