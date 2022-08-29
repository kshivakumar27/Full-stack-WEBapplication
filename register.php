<?php

require "config.php";

//echo "test";


$email = $username = $password = $confirm_password = "";
$error_email = $error_username = $error_password = $error_confirm_password = "";
 
if(isset($_POST["submit"])){

    if(!empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
        
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];
       // $confirm_password=$_POST["confirm_password"];



    //  $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
      $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
      //  $query="INSERT INTO users (email, username, password) VALUES('','$email', '$username', '$password')";
     // echo $query;exit;
       if(mysqli_query($conn,$query)){
           echo "registration successfull";
           header("location: login.php");
    }
        else{
            echo " registration not successfull";
        }

        

    }

}




    ?>



 <!----
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="    //<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="myForm" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>   
    
    














































    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

  
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>




    
    
    <script src="script1.js"></script>
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
---->


<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./style2.css">
<title>Login</title>
</head>
<body>



















<?php

//require_once "config.php";
 


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["email"])){
        $email_err = "Please enter a email.";     
    } else{
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["username"])){
        $username_err = "Please enter a username.";     
    } else{
        $username = test_input($_POST["username"]);
    }

    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } else{
        $password = test_input($_POST["password"]);
    }

    if(empty($_POST["password"])){
        $confirm_password_err = "Please enter a password.";     
    } else{
        $confirm_password = test_input($_POST["confirm_password"]);
    }

  
   
   /*
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";     
    } elseif(strlen(trim($_POST["email"])) < 5){
        $email_err = "email must be valid";
    } else{
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";     
    } elseif(strlen(trim($_POST["email"])) < 5){
        $email_err = "email must be valid";
    } else{
        $email = trim($_POST["email"]);
    }
*/

}

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="myForm" method="post">
<div class="form-group">
<label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
</div>
<div class="form-group">
<label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
</div>
<div class="form-group">
<label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
</div>

<div class="form-group">
<label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
</div>
<div class="form-group">
                <input type="submit" class="btn btn-success"  name="submit" value="submit">
               

        </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
                <br>   
               
        
</form>








</div>
</div>
</div>
</div>






 
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

         
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


        
 <!--  <script src="script.js"></script>  --->

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