<?php

if($conn=mysqli_connect('localhost','root','','register'))
 $email=$_POST['email'];
 $pd=$_POST['pd'];
 if($email!=''&&$pd!='')
 {
   $query="select * from volunteer where email='$email' and pd='$pd'";
   $rows=mysqli_query($conn,$query);
   $a=mysqli_num_rows($rows);
   if($a>0){
   header("Location:volunteer.php");
   }else{
   echo "failed";
   }
 }
 else
 {
  echo'Invalid username or password';
 }

mysqli_close($conn);
