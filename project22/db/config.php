<?php
 $link = mysqli_connect("localhost","root","hiep2003","information");

 if($link === false){
  die("Error" . mysqli_connect_error() );

 }
