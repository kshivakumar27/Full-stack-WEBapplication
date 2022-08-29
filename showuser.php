
<?php
session_start();
require_once "header.php";

 
?>
 

<html>
<head>






<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>














<script src="//code.jquery.com/jquery-1.9.1.js"></script>
       
    
     <script type="text/javascript">
    
     $(document).ready(function() {
    
        $("#display").click(function() {                
    
         
    });
    });
    
    </script>
 <!---   
    <script>
	$.ajax({
		url: "view-ajax.php",
		type: "POST",
		cache: false,
		success: function(data){
			alert(data);
			$('#table').html(data); 
		}
	});
</script>


---->
<script>
  
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("view-ajax", function(responseTxt, statusTxt, xhr){
      $.ajax({
		url: "view-ajax.php",
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#table').html(data); 
		}
  });




      if(statusTxt == "success")
        alert("External content loaded successfully!");
        
      if(statusTxt == "error")
      alert("External content loaded successfully!");
    });
  });
});
</script>



</head>
<body>

<div id="txtHint"><b>Person info will be listed here...</b></div>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">u1</option>
  <option value="2">u2</option>
  <option value="3">u3</option>
  <option value="4">u4</option>
  </select>
</form>
<br>

       <button id='div1'>Load data</button>
       
	<table border="1" align="center">
    <thead>
      <tr>
        
        <th>Email</th>
        <th>Username</th>
        <th>Profile Picture</th>
     
	
      </tr>
    </thead>
    </tr>
    <tbody id="table">
      
    </tbody>
  </table>

  
</div>

</body>
</html>