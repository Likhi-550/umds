
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
<center><h1>ASSIGN VOLUNTEER</h1></center>
<form action="#" id="form" method="post" class="form">  
<div class="input">
<label for="fname"><b>Enter the mail of assigning volunteer</b></label>  
<input type="text" name="emai" placeholder= "mail" id="fname" autocomplete="off" required />  
<small>Error message</small>
</div>
<div class="input">
<label for="lname"><b>Enter Message</b></label>  
<input type="text" name="area" placeholder= "Make sure you include contact and address details" id="lname" rows="5" autocomplete="off" required />  
<small>Error message</small>
</div>

<div>
<button type="submit" class="btn" name="submit" value="send"><b>Submit</b></button>
</div>  
</form>  
</div>
<?php
if(isset($_POST['submit']))
{
$to =$_POST['emai'];
$subject = 'NGO Assigned';
$content = $_POST['area'];
$headers = "From: Your-Email\r\n";
mail($to, $subject, $content, $headers);
}
?></body>
</html>

