<?php
  include('./db/config.php');
  session_start();
  if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
    // Redirect to login if not authenticated
   
  }
  $username = $_SESSION['user_id'];
  // Retrieve user data from array using the username
  $user = null;
  foreach ($users as $u) {
    if ($u['username'] === $username) {
      $user = $u;
      break;
    }
  }
  if ($user) {
  // Display user information
    echo '<div class="info">';
    echo '<p class="">Welcome, ' . $user['name'] . ' !</p>';
    echo '<br><p>Email: '.$user['email'].' </p>';
    echo '<br><a href="logout.php">Logout</a>';
    echo '</div>';
  } else {
    echo "Error: User not found.";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  
</body>
</html>