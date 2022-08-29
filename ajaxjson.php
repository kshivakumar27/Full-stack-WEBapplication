

<?php
session_start();
require_once "header.php";

 
?>
 



<html>
   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		 
 
 
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#driver").click(function(event){
               
               $.getJSON('result.json', function(jd) {
                  $('#stage').html('<p> Name: ' + jd.name + '</p>');
                  $('#stage').append('<p>Age : ' + jd.age+ '</p>');
                  $('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
               });
          
            });
         });
      </script>
   </head>
	
   <body>
      <p>Click on the button to load result.json file −</p>
		
      <div id = "stage" style = "background-color:#eee;">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
   </body>
</html>