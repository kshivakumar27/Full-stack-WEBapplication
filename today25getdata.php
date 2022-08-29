
<?php
session_start();
require_once "header.php";

 
?>
 







<?php 
// Handle AJAX request (start)
if( isset($_GET['ajax']) && isset($_GET['name']) ){
    echo $_GET['name'];
    exit;
}
// Handle AJAX request (end)
?>

<!doctype html>
<html>
    
    <body >
        
        <form method='GET' action>

            <input type='text' name='name' placeholder='Enter your name' id='name'>
            <input type='submit' value='submit' name='submit'><br>
            <div id='response'></div>
        </form>

        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='jquery-3.1.1.min.js' type='text/javascript'></script>
        <script>
        $(document).ready(function(){
            $('#name').keyup(function(){
                var name = $('#name').val();

                $.ajax({
                //    url: 'ajaxsuccess.php',
                    type: 'get',
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