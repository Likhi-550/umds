<!DOCTYPE html>
<html lang="en">
<head>
<title>Donation</title>
<link rel="stylesheet" href="donationform.css" type="text/css">

</head>
<body>  
<form action="donation.php"  method="post"id="form" class="form">  
<div class="container">  
<centre><h1>DONATION FORM</h1></centre> 
<div class="input" style="margin-top:100px">
<label for="name"><b>Name</b></label>  
<input type="text" name="name" placeholder= "Name" id="name" autocomplete="off" required /> 
<small>Error message</small>
</div>
<div class="input">
<label for="brand"><b>Medicine Name</b></label>  
<input type="text" placeholder="Med name" name="brand" id="brand" autocomplete="off" required>
<small>Error message</small>
</div>
<div class="input">
<label for="quantity"><b>Quantity</b></label>  
<input type="text" placeholder="00" name="quantity" id="quantity" autocomplete="off" required>
<small>Error message</small>
</div>
<div class="input">
<label for="quantity"><b>Medicine Type</b></label>  
<input type="text" placeholder="Tablet/Syrup" name="medtype" id="medtype" autocomplete="off" required>
<small>Error message</small>
</div>
<div class="input">
<label for="doe"><b>Date Of Expiry</b></label>  
<input type="date" placeholder="" name="doe" id="doe" required>    
<small>Error message</small>
</div>
<div class="input">
<label for="phn"><b>Phone No</b></label>  
<input type="text" name="phone"  placeholder="+91" size="10"id="phn" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
<div class="input">
<label for="address"><b>Address for medicine collection</b></label>
<textarea cols="80" rows="5" placeholder=" Address" value="address" name = "address" id="address" autocomplete="off" required></textarea>
<small>Error message</small>
<div class="input">
<label for="pin"><b>Pin Code</b></label>  
<input type="text" name="pin"  placeholder="" size="6" id="pin" autocomplete="off"/ required> <b>
<small>Error message</small>
</div>
</div>
<div>
<button type="submit" class="btn"><b>Submit</b></button>
</div>  
</form>  
</div>
</body>
</html>
