
<?php

require "config.php";


$msg = "";
$msg_class = "";
if(isset($_POST['submit']))
{
  //$result=mysqli_query($conn,$query);
  //if(mysqli_num_rows($result)>0){
  //  $var ="Username already exist";
  //}else{

    $msg = "";
    $msg_class = "";
  
 $username = trim($_POST['username']);
 $email = trim($_POST['email']);
 $password = trim($_POST['password']);
//$confirm_password=trim($_POST['confirm_password']);
 $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
 //  $query="INSERT INTO users (email, username, password) VALUES('','$email', '$username', '$password')";
// echo $query;exit;
  if(mysqli_query($conn,$query)){


 if(empty($username))
 {
  $error = "enter your name !";
  $code = 1;
  $msg = "There was an error in the username insertion";
  $msg_class = "alert-danger";
 }
 else if(!ctype_alpha($username))
 {
  $error = "letters only !";
  $code = 1;
  $msg = "There was an error in the username insertion";
  $msg_class = "alert-danger";
 }
 else if(empty($email))
 {
  $error = "enter your email !";
  $code = 2;
  $msg = "There was an error in the email insertion";
  $msg_class = "alert-danger";
 }
 else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 2;
  $msg = "There was an error in the email insertion";
  $msg_class = "alert-danger";
 }
 
 else if(empty($password))
 {
  $error = "enter password !";
  $code = 4;
  $msg = "There was an error in the password insertion";
  $msg_class = "alert-danger";
 }
 else if(strlen($password) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
  $msg = "Registration is not successfull";
  $msg_class = "alert-danger";
 }
 
 
 /*
 else if(empty($confirm_password))
 {
  $error = "enter confirm password !";
  $code = 4;
 }
 else if(empty($password!==$confirm_password))
 {
  $error = " password did not match";
  $code = 4;
 }
 else if(strlen($confirm_password) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
*/








 else
 {
  if(empty($errors)){
    // Insert Query or sending email
    // if($query){
 
    // }
    $messages[] = "Registration is successfull";
    //$msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
    }
  elseif(empty($messages)){
    $errors[] = "Registration not successfull";
  }

   // header("location: login.php");
 }
 }
} //}
  ?>
 
<!doctype html>
<html lang="en">
<head>


  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width,
        initial-scale=1" />












  

























  <!-- Bootstrap CSS -->
  <link
  href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity=
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
  crossorigin="anonymous"
  />
  <link rel="stylesheet"
    href="styles11.css" />
  <link rel="preconnect"
    href="https://fonts.gstatic.com" />
  <link
  href=
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
  rel="stylesheet"
  />
  <title>Php task</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(document).ajaxSuccess(function(){
    alert("Registration successfully completed");
  });
  $("button").click(function(){
    $("div").load("");
  });
});
</script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(document).ajaxError(function(){
    alert("An error occured!");
  });
  $("button").click(function(){
    $("div").load("");
  });
});
</script>
--->


<!----  <div><h2>Let AJAX change this text</h2></div>  --->









<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./style2.css">
<title>Login</title>
</head>
<body>





<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
      </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"
      id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
      <li class="nav-item">
        <a class="nav-link active"
        aria-current="page"
        href="login.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"
        href="index1reg.php">Sign UP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"
        href="index.html">Go back</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"
        href="#product"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"
        href="#social"></a>
      </li>
      </ul>
    </div>
    </div>
  </nav>
  </section>



























<?php
if(isset($error))
{
 ?>
    <tr>
    <td id="error" style="color:red; "><?php echo $error; ?></td>
    </tr>
    <?php
}
?>



<div id="login-bg" class="container-fluid">
<div class="bg-img"></div>
<div class="bg-color"></div>
</div>

<div class="container" id="login">
<div class="row justify-content-center">
<div class="col-lg-8" >
<div class="login" >
<h1>Register</h1>
<!----<h1><?php echo $var;?></h1>--->








 
<meta name="viewport" content="width=device-width, initial-scale=1">





<?php
                      if(!empty($errors)){
                        echo "<div class='alert alert-danger'>";
                        foreach ($errors as $error) {
                          echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
                        }
                        echo "</div>";
                      }
                    ?>
                    <?php
                      if(!empty($messages)){
                        echo "<div class='alert alert-success'>";
                        foreach ($messages as $message) {
                          echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
                        }
                        echo "</div>";
                      }
                    ?>

<?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>









<form action="" id="myForm" method="post">





                <div class="form-group">
<label>Username</label>
<td><input type="text" name="username" placeholder="User Name" class="form-control value="<?php if(isset($username)){echo $username;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> /></td>
</div>


<div class="form-group">
<label>Email</label>
<td><input type="text" name="email" placeholder="Your Email"  class="form-control value="<?php if(isset($email)){echo $email;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; }  ?> /></td>
</div>



<div class="form-group">
<label>Password</label>
<td><input type="password" name="password" placeholder="Your Password" class="form-control" <?php if(isset($code) && $code == 4){ echo "autofocus"; }  ?> /></td>
</div>


<!--
<div class="form-group">
<label>Confirm Password</label>
<td><input type="password" name="confirm_password" placeholder="Your Password" class="form-control" <?php if(isset($code) && $code == 4){ echo "autofocus"; }  ?> /></td>
</div>
--->
<div class="form-group">

  
<button type="submit" class="btn btn-lg btn-success btn-block"  name="submit" value="submit">Submit</button>
<!---<button type="submit" name="submit">Submit</button>  ---->
</div>
<p>Already have an account? <a href="login.php">Login here</a>.</p>
                <br> 





























</div>
</div>
</div>
</div>






<script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

         
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


        
   <script src="script.js"></script>  

    <script type="text/javascript">




$(document).ready(function () {
   
   


   
   
    $.validator.addMethod('username', function (value, element, param) {
        var nameRegex = /^[a-zA-Z0-9]+$/;
        return value.match(nameRegex);
    }, 'Only a-z, A-Z, 0-9 characters are allowed');

   
   
   
   
   
   
    var val = {
      
        rules: {
            
            username: {
                username: true,
                required: true,
                minlength: 4,
                maxlength: 4,
            },
           
        },
        
        messages: {
            
            username: {
                required: "Username is please",
                minlength: "Username should be minimum 4 characters",
                maxlength: "Username should be maximum 16 characters",
            },
           
        }
    }
    $("#myForm").multiStepForm(
            {
                // defaultStep:0,
                beforeSubmit: function (form, submit) {
                    console.log("called before submiting the form");
                    console.log(form);
                    console.log(submit);
                },
                validations: val,
            }
    ).navigateTo(0);
});
</script>









</body>
</html>