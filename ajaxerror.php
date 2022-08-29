

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
  $(document).ajaxError(function(){
    alert("An error occured!");
  });
  $("button").click(function(){
    $("div").load("prc.text");
  });
});
</script>
</head>
<body>

<div><h2>Let AJAX change this text</h2></div>

<button>Change Content</button>

</body>
</html