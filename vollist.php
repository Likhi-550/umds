<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
 
   padding: 20px 20px;
}

.topnav a {
  display: inline;
  color: black;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 20px;
  font-weight:small;
  border-bottom:3px solid transparent;
  
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


</style>

</head>
<body>
<center>

  <div class="w3-card-4"style="margin-left:20%;margin-right:20%;margin-top:1%;">
    <div class="w3-container w3-red">
      <h2>volunteers list</h2>
    </div>

    <form class="w3-container" method="post">
      <p>
      
      
      
    </form>
	
  </div>
</div>
<table border="2" style="width:40%;float:center;margin-top:7%;">

<tr><th> Name</th><th>Blood group</th><th> Phonenumber</th><th>address</th><th> Email</th>

</center>
<?php
$conn = mysqli_connect("localhost", "root", "","register");
$sql = "select * from volunteer";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
  while($row = $result->fetch_assoc()) {
	  ?>
	  <?php $mail= $row["email"];?>
	  <tr><td><?php echo $row["fname"] ?></td><td><?php echo $row["bg"] ?></td><td> <?php echo $row["phone"] ?></td><td> <?php  echo $row["address"]?></td><td> <?php echo $row["email"] ?></td> </tr>
	  
	 
   <?php
   
  }$conn->close();
?>
</body>
</html>