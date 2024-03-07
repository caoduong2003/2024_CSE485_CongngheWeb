<?php 
  include("./db/config.php");
  $sql = "select name, email, avatar from users";

  $res = mysqli_query($link,$sql);
  if(mysqli_num_rows($res)>0){
    $user = mysqli_fetch_array($res);
    mysqli_free_result($res);
  }else{
    echo "no matching records are found";

  }
  
  mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <form action="update_profile.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <div class="image">
        <img src="<?= $user['avatar']?>" alt="">
      </div>
      Change Avatar: <input class="avatar m-3" value="Change Avatar" type="file" name="avatar" accept="image/*">
    </div>
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control"  name="name" value="<?= $user['name']?>">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email" value="<?= $user['email']?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>