
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
background-image:url("reg1.jpg");
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
<center><h1>VOLUNTEER REGISTRATION FORM</h1></center>
<form action="regg.php" id="form" method="post" class="form">  
<div class="input">
<label for="fname"><b> First Name</b></label>  
<input type="text" name="fname" placeholder= "Ex: abc" id="fname" autocomplete="off" required />  
<small>Error message</small>
</div>
<div class="input">
<label for="lname"><b>Last Name</b></label>  
<input type="text" name="lname" placeholder= "Ex: xyz" id="lname" autocomplete="off" required />  
<small>Error message</small>
</div>
<div class="input">
<label for="email"><b>E-Mail(User Name)</b></label>    
<input type="text" name="email" placeholder="Ex: abc123@gmail.com"id="email" autocomplete="off" required />
<small>Error message</small>
</div>
<div>
<label for="med"><b>Gender</b></label><br>
<input type="radio" value="male" name="med" id="med">  Male<br>  
<input type="radio" value="female" name="med" id="med">  Female <br><br>
</div>
<div class="input">
<label for="dob"><b>Date Of Birth</b></label>  
<input type="date" placeholder="" name="dob" id="dob" required>    
<small>Error message</small>
</div>
<div class="input">
<label for="phn"><b>Phone Number</b></label>  
<input type="text" name="phone"  placeholder="+91" size="10"id="phn" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
<div class="input">
<label for="bg"><b>Blood group</b></label>  
<input type="text" name="bg"  placeholder="Ex: A positive" size=""id="bg" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
<div class="input">
<label for="address"><b>Address</b></label>
<textarea cols="80" rows="5" name="address" placeholder=" Address" value="address"id="address" autocomplete="off" required></textarea>
<small>Error message</small>
</div>
<div class="input">
<label for="pd"><b>Password</b></label>  
<input type="password" placeholder="make sure you remember" name="pd" id="pd" autocomplete="off" required>
<small>Error message</small>
</div>
<div class="input">
<label for="cpd"><b>Confirm Password</b></label>  
<input type="password" placeholder="" name="cpd" id="cpd" autocomplete="off" required>
<small>Error message</small>
</div>
<div>
<label>TERMS AND CONDITIONS</label><br>
<label>1.Extend your helping hand during natural disasters.</label><br>
<label>2.Staying active to collect from donors and update ngo</label><br><br>
<input type="checkbox"name="check"> I accept to all terms and conditions..</div><br>
<div>
<button type="submit" class="btn"><b>Submit</b></button>
</div>  
</form>  
</div>
</body>
</html>