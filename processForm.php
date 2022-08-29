<?php





if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";



  $msg = "";
  $msg_class = "";
  //$conn = mysqli_connect("localhost", "root", "", "demo");
  require_once "config.php";




  if (isset($_POST['save_profile'])) {
    // for the database
   // $bio = stripslashes($_POST['bio']);
   //echo '<pre>';print_r($_FILES);exit;
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200) {
      $msg = "Image size should not be greated than 20Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    
    // Upload image only if no errors
    if (empty($error)) {
      //if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE users SET profile_image='$profileImageName' WHERE id=$_SESSION[id]";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
           
          header("location: welcome.php");
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
























  
  /*
  
  if (isset($_POST['save_profile'])) {
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];    
      $folder = "C:/Users/99005441/Pictures/images/".$filename;
        
  $db = mysqli_connect("localhost", "root", "", "demo");

      // Get all the submitted data from the form
      $sql = "INSERT INTO users (filename) VALUES ('$filename')";

      // Execute query
      mysqli_query($db, $sql);
        
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))  {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
    }
}
  
  
*/


?>