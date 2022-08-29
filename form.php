<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";
?>
 

<?php include_once('processForm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
<a class="navbar-brand" href="#">
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome </h1>
			</a>
      <li class="nav-item">
				<a class="nav-link"
				href="welcome.php">Go back</a>
			</li>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <a href="profiles.php">View all profiles</a>
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update profile</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="images/avatar.jpg" alt="no image" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>

          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="script3.js"></script>