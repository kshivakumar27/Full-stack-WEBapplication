
<?php
session_start();
require_once "header.php";

 
?>
 


<!doctype html>
<html>
 
 <body >
 
  <form >

<button id="loadXmlFile">Try</button>
<div id="xmlData"></div>
  
  </form>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>


$("#loadXmlFile").click(function (e) {
    $.ajax({
        url: "product.xml",
        type:'post',
        success: function (result, status, xhr) {
            var table = "<table><tr><th>Name</th><th>Color</th><th>Price</th></tr>";
            var cols="";
  
            $("product", result).each(function (i) {
                tdCol = "<td>" + $(this).find("name").text() + "</td>";
                tdCol += "<td>" + $(this).find("color").text() + "</td>";
                tdCol += "<td>" + $(this).find("price").text() + "</td>";
                cols += "<tr>" + tdCol + "</tr>";
            });
  
            table += cols + "</table>";
            $("#xmlData").html(table);
        }
    });
});




</script>


</body>
</html>