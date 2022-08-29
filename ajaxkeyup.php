


<?php
session_start();
require_once "header.php";

 
?>
 




<?php
// Handle AJAX request (start)
if( isset($_POST['ajax']) && isset($_POST['name']) ){
 echo $_POST['name'];
 exit;
}
// Handle AJAX request (end)
?>

<!doctype html>
<html>
 
 <body >
 
  <form method='post' action>

   <input type='text' name='name' placeholder='Enter your name' id='name'>
   <input type='submit' value='submit' name='submit'><br>
   <div id='response'></div>
  </form>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#name').keyup(function(){
     var name = $('#name').val();

     $.ajax({
      type: 'post',
      data: {ajax: 1,name: name},
      success: function(response){
       $('#response').text('name : ' + response);
      }
     });
    });
  });
  </script>
 </body>
</html>