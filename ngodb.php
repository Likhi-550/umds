<?php 
$servername = "localhost";
$database = "register";
$username = "root";
$password = "";


if($conn = mysqli_connect($servername, $username, $password, $database))
{   
	$nname=$_POST['nname'];
	$naddress=$_POST['naddress'];
	$nphn=$_POST['nphn'];
    $nemail=$_POST['nemail'];
	$npd=$_POST['npd'];
	$ncpd=$_POST['ncpd'];
	$nsign=$_POST['nsign'];
	$sql_query="INSERT INTO `ngo`(`nname`, `naddress`, `nphn`, `nemail`, `npd`, `ncpd`, `nsign`) VALUES ('$nname','$naddress','$nphn','$nemail','$npd','$ncpd','$nsign')";
	if(mysqli_query($conn, $sql_query))
	{
$to =$_POST['nemail'];
$subject = 'NGO Registration';
$content = 'Successfully registered.....Thank you...!';
$headers = "From: Your-Email\r\n";
mail($to, $subject, $content, $headers);
		header("Location:ngolog.php");
		
		
	}
	else{
		echo "not added" ;
	}
	mysqli_close($conn);
}
else{
	echo "not connected to db";
}
?>