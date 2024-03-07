<?php
include("./db/config.php");

/// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Validate and update user informatio

  $errors = [];
  $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);// Handle avatar upload (similar to previous exercise)
  $allowedExtensions = ['jpg', 'jpeg', 'png'];
  $maxSize = 1048576; // 1MB
  $targetDir = "./assets/images/"; // Adjust directory path
  
    if (!empty($_FILES['avatar']['tmp_name'])) {
      $fileInfo = pathinfo($_FILES['avatar']['name']);
    if (!in_array($fileInfo['extension'], $allowedExtensions)) {
      $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
    } else if ($_FILES['avatar']['size'] > $maxSize) {
      $errors[] = "File size must be less than 1MB.";
    } else {
        $fileName = uniqid() . "." . $fileInfo['extension'];
        $targetFile = $targetDir . $fileName;
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile))
        {
          $user['avatar'] = $targetFile;// Update avatar URL in array
          

        } else {
        $errors[] = "Failed to upload file.";
        }
      }
  }


  // Handle errors or update profile
  if (empty($errors)) {
  // Update user profile in database or persistent storage (replace withyour logic)
      $sql = "update users set avatar = '". $user['avatar']."' where name ='".$user['name']."'" ;
      echo $sql;
      if(mysqli_query($link,$sql)){
          header("Location: profile.php");
      }
    } else {
      echo "Errors:";
      foreach ($errors as $error) {
      echo "<br> - $error";
    }
  }
}
?>