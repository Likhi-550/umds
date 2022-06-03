<?php 
$servername = "localhost";
$database = "register";
$username = "root";
$password = "";


if($conn = mysqli_connect($servername, $username, $password, $database))
{   
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
    $gender=$_POST['med'];
	$dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$bg=$_POST['bg'];
	$address=$_POST['address'];
    $pd=$_POST['pd'];
	$sql_query="INSERT INTO `volunteer`(`fname`, `lname`, `email`, `med`, `dob`, `phone`, `bg`, `address`, `pd`) VALUES ('$fname','$lname','$email','$gender','$dob','$phone','$bg','$address','$pd')";
	if(mysqli_query($conn, $sql_query))
	{
		  

$to = $email;

$subject = 'Volunteer Registration';

$content = 'Thank you for registering...!';

$headers = "From: Your-Email\r\n";

mail($to, $subject, $content, $headers);

		header("Location:logvolunteer.php");

		
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