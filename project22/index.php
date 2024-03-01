<?php include "user.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class = "body">
        <div class = "account">
            <h6>Account Settings</h6>
            <p>Profile</p>
            <p>Password</p>
            <p>Intergrations</p>
            <p>Billing</p>
        </div>
    <div class="boder">    
        <div class="container mt-3">           
            <img src="acsset/images/capture1.PNG" class="rounded-circle" alt="Cinque Terre" width="120" height="120" style ="margin-left:30px"><br> 
            <button type="button" class="btn btn-primary btn-sm">Chang My Avatar</button>
        </div>
        <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder ="<?php echo $user['name']?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $user['email'] ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="phone" class="form-control" id="phone" placeholder = "<?php echo $user['phone']?>">
        </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>