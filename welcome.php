<?php
session_start();
require_once "header.php";

 
?>
 






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
               
			 
			 
			 
		<!--	  <td> <img src="<?php echo 'uploads/' . $user['profile_image'] ?>" width="90" height="90" alt=""> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $user['username'] ?>">View</button> </td>
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





