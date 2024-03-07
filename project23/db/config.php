<?php
  $link =  mysqli_connect("localhost","root","hiep2003","information");

  if($link == false){
    echo "loi: ".mysqli_connect_error();
  }
  $sql = "select * from user";

  $res = mysqli_query($link,$sql);
  if(mysqli_num_rows($res)>0){
    $users = mysqli_fetch_all($res,MYSQLI_ASSOC);
    // echo '<br>';
    // echo print_r($users);
    // echo '<br>';
    // echo $users['name'];
  }



