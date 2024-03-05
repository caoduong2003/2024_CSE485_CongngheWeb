<?php 
$link = mysqli_connect("localhost","root","hiep2003","information");

$sql = "select * from user";

$res = mysqli_query($link,$sql);

if(mysqli_num_rows($res)>0){
  
  $users = mysqli_fetch_all($res,MYSQLI_ASSOC);
    

}