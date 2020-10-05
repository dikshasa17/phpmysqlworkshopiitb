 <html>
<form action="strfunc.php" method="POST">
Enter a string:<input type="text" name="str">
<input type="submit" value="submit">
</form>
</html>
<?php
 $string=$_POST['str'];
 if($string)
 {
  echo strlen($string)."<br>";
  $exparray=explode(" ",$string);
  foreach($exparray as $value)
  {
  echo $value."<br>";
  }
  echo strrev($string)."<br>";
  echo strtolower($string)."<br>";
  echo strtoupper($string)."<br>";
  $result=substr_replace($string,"David",11,14);
  echo $result;
 }
?>
