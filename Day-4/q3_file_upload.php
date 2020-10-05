<html>
	<h1>Upload a file...</h1>
  <form action="fileupload.php" method="POST" enctype="multipart/form-data">
	 <input type="file" name="myfile"><p>
   <input type="submit" value="Upload">
  </form>
</html>

<?php
	$name= $_FILES["myfile"]["name"];
	$size= $_FILES["myfile"]["size"];
	$error= $_FILES["myfile"]["error"];
	echo $_FILES["myfile"]["size"];
?>