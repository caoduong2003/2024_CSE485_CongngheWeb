<?php 
  include("./db/user.php");
  session_start();

  if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ){
    header("Location: login.php");
  }

  $username = $_SESSION['user_id'];
  $user = null;

  foreach($users as $u){
    if($u['username'] == $username){
      $user = $u;
      break;
    }
  }

  if($user){
    $user_role = $_SESSION['user_role'];
    echo "welcome,".$user['name']."!";
    echo "<br>Email: ".$user['email']."";

    if($authorization_levels[$user_role]['edit_profile']){
      echo "<br>Edit basic profile infomation(link)";

    }

    if($user_role == "admin" && $authorization_levels[$user_role]["access_admin_panel"]){
      echo "<br><a href='admin_panel.php'>Adminpanel</a>";
    }
  }else{
    echo "Error: User not found.";
  }
?>