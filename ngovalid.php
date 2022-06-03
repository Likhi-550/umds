<?php

if($conn=mysqli_connect('localhost','root','','register'))
 $nemail=$_POST['nemail'];
 $npd=$_POST['npd'];
 if($nemail!=''&&$npd!='')
 {
   $query="select * from ngo where nemail='$nemail' and npd='$npd'";
   $rows=mysqli_query($conn,$query);
   $a=mysqli_num_rows($rows);
   if($a>0){
   header("Location:ngolog.php");
   }else{
   echo "failed";
   }
 }
 else
 {
  echo'Invalid username or password';
 }

mysqli_close($conn);
