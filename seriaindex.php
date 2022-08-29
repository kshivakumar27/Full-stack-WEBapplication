
<?php
session_start();
require_once "header.php";
?>
 





<!DOCTYPE html>  
<html>
	<head>
		<title>jQuery Ajax serialize form data example</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	        <script type="text/javascript">
	        $(function(){
		  $("#button").click(function(){
		 // var dataString =$("form").serializeArray();
		  var dataString =$("form").serialize();
		 
		// alert(dataString);
	//	 console.log(dataString);
	//	  $.each(dataString, function(i, field){ 
		//	console.log(dataString[i].value);
			//  alert(value); 
          //  $("#results").append(field.name + ":" + field.value + " ");  
      //  });  
		  //dataString[]
		 // alert(dataString);
		  $.ajax({
		  type: "POST",
		  url: "upload.php",
		  data: dataString,
		  success: function(data)
		  {
			  alert(data);
			//alert('Success!');
			//$("#serializeForm")[0].reset();
		  }
		  });

		  
		  });
	        });
	        </script>
	</head>
	<body>
	<div class="container">
		<form id="serializeForm" method="POST" name="myForm">
		<div class="form-group">
			<label>Enter name:</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Enter Email:</label>
			<input type="text" id="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Enter Message:</label>
			<textarea name="message" id="message" class="form-control"></textarea> 
		</div>
		<button type="button" class="btn btn-primary" id="button">Submit</button>
		</form>
	</div>	
	</body>
</html>