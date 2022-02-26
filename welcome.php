


<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!---  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>   --->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>






























</body>






</html>


<!DOCTYPE html>
<html lang="en">






<head>







<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>



























  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width,
        initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
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
  <title>Rock</title>


    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
  <section id="navbar">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome </h1>
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
        href="#about">About Us</a>
      </li>
            
      <li class="nav-item">
        <a class="nav-link"
        href="update.php">Update</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link"
        href="logout.php">Logout</a>
      </li>
      </ul>
    </div>
    </div>
  </nav>
  </section>

  <!-- banner -->
  <section id="banner">
  <div class="container-fluid" id="banner-container">
    <div class="row" id="banner-row">
    <div class="col-md-6" id="banner-col">
      

      
    </div>
    <div class="col-md-6" id="banner-col2">
      
    </div>
    </div>
  </div>
  </section>

  <!-- services -->
  <section id="service">
  <h1 class="text-center">Php Task</h1>
  <div class="container-fluid" id="service-container">
    <div class="row" id="banner-row">
    <div class="col-md-4" id="service-col1">
      

    </div>
    <div class="col-md-4" id="service-col2">
      

    </div>
    <div class="col-md-4" id="service-col3">
      
      

    </div>
    </div>
  </div>
  </section>
  <hr />






     
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    <!----    <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a> --->
                    </div>

      


                    <?php
                    // Include config file
                    require_once "config.php";
          $conn = mysqli_connect("localhost", "root", "", "demo");
          $results = mysqli_query($conn, "SELECT * FROM users where id=$_SESSION[id]");
          $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

          



                    // Attempt select query execution
                  /*  $sql = "SELECT * FROM users where id=$_SESSION[id]";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                      //  echo "<th>#</th>";
                                        echo "<th>UserName</th>";
                                        echo "<th>Email</th>";
                                        
                                     //   echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                       // echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        
                                        echo "<td>";
                                      //      echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                      //      echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                      //      echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                       // echo "</td>";
                                    echo "</tr>";
                                }

                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 */
                    // Close connection
                   
                    ?>
                </div>
            </div>        
        </div>
    </div>



















  
  <!-- social -->
  <section id="social">
  
      





            <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
      <!---  <a href="form.php" class="btn btn-success">Edit profile</a>--->
        <br>
        <br>
        <table class="table table-bordered">
          <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>View details</th>
            <th>Edit Profile image</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
               
       
       
       
    <!--    <td> <img src="<?php echo 'uploads/' . $user['profile_image'] ?>" width="90" height="90" alt=""> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $user['username'] ?>">View</button> </td>
      --->  
      <td>  <img id="myImg1" src="<?php echo 'uploads/' . $user['profile_image'] ?>" alt="no image" style="width:90%;max-width:90px"></td>
       
       
        <td> <?php echo $user['username']; ?> </td>
              <td> <?php echo $user['email']; ?> </td>
              
             
             
              <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $user['username'] ?>">View</button></td>
            
      <td><a href="form.php" class="btn btn-success">Edit profile</a></td>
      
            </tr>

        <div id="myModal<?php echo $user['username'] ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Details</h4>
            </div>
            <div class="modal-body">
              <h3><img src="<?php echo 'uploads/' . $user['profile_image'] ?>" width="90" height="90" alt="no image"></h3>
             <h3>Name : <?php echo  $user['username']; ?></h3>
            
             <h3>Email : <?php echo $user['email']; ?></h3>
            </div>
        
        




      











        
        
        
        
        </div>
      </div>
    </div>
    

<!-- The Modal -->
<div id="myModal2" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

      

      
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>















  </section>





















    
  <!-- footer -->
  <section id="footer">
  <section id="banner">
    <div class="container-fluid" id="banner-container">
    <div class="row" id="banner-row">
      
      <div class="col-md-4" id="footer-col2">
      

      <div class="col-md-4" id="footer-col2">
      
      
      </div>
    </div>
    </div>
  </section>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
  src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
  integrity=
"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
  crossorigin="anonymous"
  ></script>
</body>
</html>

