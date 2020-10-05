<form action='marksvisitors.php' method="POST">
	Name : <input type='text' name='name' ><br>
	Subject1 : <input type='number' name='sub1' ><p>
	Subject2 : <input type='number' name='sub2' ><p>
	Subject3 : <input type='number' name='sub3' ><p>
	Subject4 : <input type='number' name='sub4' ><p>
	Subject5 : <input type='number' name='sub5' ><p>
	<input type='submit' name='submit' value='submit'>
</form>
<?php
require("connection.php");
$name = $_POST['name'];
$s1 = $_POST['sub1'];
$s2 = $_POST['sub2'];
$s3 = $_POST['sub3'];
$s4 = $_POST['sub4'];
$s5 = $_POST['sub5'];
$totobt=$s1+$s2+$s3+$s4+$s5;
$tot=500;
$percent=($totobt/$tot)*100;
if ($name && $s1 && $s2 && $s3 && $s4 && $s5)
{
	echo
	 "Student Name: $name <br>
	 Marks in Each Subject:<br>
	 Subject 1: $s1 <br>
	 Subject 2: $s2 <br>
	 Subject 3: $s3 <br>
	 Subject 4: $s4 <br>
	 Subject 5: $s5 <br>
   Total Obtained: $totobt <br>
   Total Marks: $tot <br>
	 Percentage: $percent<br>";
  $write = "INSERT INTO `class1` (`id`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`)  VALUES ('','$name','$s1','$s2','$s3','$s4','$s5','$totobt','$tot','$percent')";
	if ($connect->query($write) === TRUE) {
			 echo "New record created successfully";
		 } else {
			 echo "Error: " . $write. "<br>" . $connect->error;
	 }
}
$file=file_get_contents("count.txt");
$visitor=$file;
$visitorsnew=$visitor+1;
$file=fopen("count.txt","w");
fwrite($file ,"$visitorsnew");
echo "You've have $visitorsnew visitors";

?>