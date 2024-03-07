<?php 
$link = mysqli_connect("localhost","root","hiep2003","information");

if($link === false){
  die("ERROR: Could not connect. ".mysqli_connect_error());
}else{
  echo "thanh cong";
}




