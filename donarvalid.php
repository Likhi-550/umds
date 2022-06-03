<?php

if($conn=mysqli_connect('localhost','root','','register'))
 $em=$_POST['em'];
 $psd=$_POST['psd'];
 if($em!=''&&$psd!='')
 {
   $query="select * from donator where em='$em' and psd='$psd'";
   $rows=mysqli_query($conn,$query);
   $a=mysqli_num_rows($rows);
   if($a>0){
   header("Location:donator.php");
   }else{
   echo "failed";
   }
 }
 else
 {
  echo'Invalid username or password';
 }

mysqli_close($conn);
