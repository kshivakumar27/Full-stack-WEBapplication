

<?php
session_start();
require_once "header.php";

 
?>
 



<!doctype html>
<html lang = "en-US" xmlns:fb = "https://www.facebook.com/2008/fbml" xmlns:addthis = "https://www.addthis.com/help/api-spec" prefix="og: http://ogp.me/ns#" class = "no-js">
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
<title> upload image file using JQuery AJAX </title>
<link rel = "shortcut icon" href = "https://learncodeweb.com/demo/favicon.ico">
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity = "sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin = "anonymous">
<link rel = "stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity = "sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin = "anonymous">
</head>
<body>
<div class = "container-fluide">
<div>
<div id = "messages"></div>
<form method = "post" id = "imagesforform" enctype = "multipart/form-data" onSubmit = "return false;">
<div class = "form-group">
<input type = "file" name = "file" class = "file">
<div class = "input-group"> <input type = "text" class = "form-control" disabled placeholder = "Upload image here…" id = "inputfile">
<div class = "input-group-append">
<button type = "button" class = "browses btn btn-danger"> select image </button>
</div>
</div>
</div>
<div class = "form-group">
<img src = "https://placehold.it/150x150" id = "previews" class = "img-thumbnail">
</div>
<div class = "form-group">
<input type = "submit" name = "submit" value = "Upload image" class ="btn btn-primary">
</div>
</form>
</div>
</div>
<script src = "https://code.jQuery.com/jQuery-3.2.1.min.js"> </script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"> </script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
</script>
<script>
$(document).on("click", ".browses", function() { var inputfile = $(this)
.parent() .parent() .parent()
.find(".inputfile");
inputfile.trigger("click");
});
$('input[type = "file"]').change(function(e) {
var inputfileName = e.target.files[0].name;
$("#inputfile").val(inputfileName);
var reader = new FileReader();
reader.onload = function(e) {
document.getElementById("previews").src = e.target.result;
};
reader.readAsDataURL(this.files[0]);
});
$(document).ready(function(e) {
$("#imagesforform").on("submit", function() {
$("#messages").html('<div class = "alert alert-primary">
Please wait...!</div>');
$.ajax({
type: "POST",
url: "ajax/action.ajax.php", data: new FormData(this),
contentType: false, cache: false,
processData: false, false
success: function(data) { if (data == 1 || parseInt(data) == 1) {
$("#messages").html(
'<div class="alert alert-info"> image updated successfully. </div>'
);
} else {
$("#messages").html(
'<div class="alert alert-info">Extension not good only try with JPG, PNG, JPEG, GIF.</div>'
);
}
},
error: function(data) {
$("#messages").html(
'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is something wrong.</div>'
);
}
});
});
});
</script>
</body>
</html>