

<?php
session_start();
require_once "header.php";

 
?>
 





<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(document).ajaxSuccess(function(){
    alert("AJAX request successfully completed");
  });
  $("button").click(function(){
    $("div1").load("prc.txt");
  });
});
</script>
</head>
<body>

<div1><h2>Let AJAX change this text</h2></div1>

<button>Change Content</button>

</body>
</html>
