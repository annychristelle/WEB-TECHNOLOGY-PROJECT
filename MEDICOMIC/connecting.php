<?php
$server="localhost";
$user="root";
$pass="";
$db="MEDICOMIC";
$con=mysqli_connect($server,$user,$pass,$db);
if($con){
  echo "succefully connected";
}
else{
  echo "something is wrong";
}
?>