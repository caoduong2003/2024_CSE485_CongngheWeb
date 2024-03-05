<?php
  include('./db/user.php');
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user_found = false;
  foreach($users as $u){
    if($u['username'] == $username && password_verify($password,$u['password'])){
      $user_found = true;
      $_SESSION['user_id'] = $u['username'];
      $_SESSION['user_role'] = $u['role'];
      break;
    }
  }

  if($user_found){
    setcookie('logged_in',true,time()+60*60*24*30,"/");//set cookie for 30 day
    header("Location: profile.php");
  }else{
    echo "Invalid username or password";
  }

?>