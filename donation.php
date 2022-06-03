<?php 
$servername = "localhost";
$database = "donations";
$username = "root";
$password = "";


if($conn = mysqli_connect($servername, $username, $password, $database))
{   
	$name=$_POST['name'];
	$brand=$_POST['brand'];
	$quantity=$_POST['quantity'];
    $medtype=$_POST['medtype'];
	$doe=$_POST['doe'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
    
	$sql_query="INSERT INTO `med`(`medname`, `brand`, `quantity`, `medtype`, `doe`, `phone`, `address`, `pin`, `name`) VALUES ('$medname','$brand','$quantity','$medtype','$doe','$phone','$address','$pin','$name')";
	if(mysqli_query($conn, $sql_query))
	{
		
		header("Location:donator.php");
		echo"<script>";
		echo"alert('Your donation is updated and will inform you while collecting the medicines')";
		echo"</script>";
	}
	else{
		echo "not added" ;
	}
	mysqli_close($conn);
}
else{
	echo "not connected todb";
}
?>