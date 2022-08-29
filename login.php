<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   
    header("location: welcome.php");
    exit;
}
 

require_once "config.php";
$_SESSION['status'] = "<Registration successfull login here>";

$username = $password = "";
$username_err = $password_err = $login_err = "";
 
//echo $_SERVER["REQUEST_METHOD"];exit;
if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)){

    
    if(empty(trim($_GET["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_GET["username"]);
    }
    
   
    if(empty(trim($_GET["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_GET["password"]);
    }
    
    
    if(empty($username_err) && empty($password_err)){
       
        $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
     
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {
              echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
              
              session_start();
                            
                           
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $row["id"];
              $_SESSION["username"] = $row["username"];                            
              
            }

       //     echo "<pre>";
         //     print_r($row);exit;




              header("location: welcome.php");
          

        }

      //  session_destroy();
        //session_start();
                            
                           
      //  $_SESSION["loggedin"] = true;
     //   $_SESSION["id"] = $id;
     //   $_SESSION["username"] = $username;                            
        
        
    //    header("location: welcome.php");
    }


}     

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




















<div id="login-bg" class="container-fluid">
<div class="bg-img"></div>
<div class="bg-color"></div>
</div>

<div class="container" id="login">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="login">

        <h1>Login</h1>
        <p>Please Sign-In First</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="login" method="get">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                

            <div1></div1>

               <button type="submit" class="btn btn-success"  name="login" value="Login">Login</button>
            </div>
            <p>Don't have an account? <a href="index1reg.php">Sign up now</a>.</p>
        </form>
   




    </div>
</div>
</div>
</div>









<input type="file">









 
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

         
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
 
  


        
    <script src="script1.js"></script>

    <script type="text/javascript">




$(document).ready(function () {
   
   


   
   
   
   
   
   
   
   
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
    $("#login").multiStepForm(
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



<script>
$(document).ready(function(){
  $(document).ajaxSuccess(function(){
    alert("Signed in successfull");
  });
  $("button").click(function(){
    $("div1").load("welcome.php");
  });
});
</script>









</body>
</html>