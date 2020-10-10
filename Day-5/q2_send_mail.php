<html>
<body>
<form action = "q2_sendmail.php" method="post" name="myfeedbackform" action="form-to-email.php">

Enter Name:	<input type="text" name="name"><br>
Enter Email Address :	<input type="email" name="toemail"><br>
Enter Your Feedback :	<textarea name="message"></textarea>
<input type="submit" name = 'submit' value="Send Feedback">
</form>
</body>
</html>
<?php

if($_POST['submit'])
{
   $name = $_POST['name'];
   $message =$_POST['message'];

   if($name && $message)
     {
       $toemail = $_POST['toemail'];

        $subject = "This message is from PCE!!";
        $body = "Thanks for your valuable feedback $name !  ";
        $headers = "From: sainidiksha2404@gmail.com";

        if (mail($toemail, $subject, $body, $headers))
          {
            echo "Email successfully sent to $toemail...";
            $toemail = "sainidiksha2404@gmail.com";
            $subject = "$name has successfully given a feedback!";
            $body = $_POST['message'];
            $headers = $_POST['toemail'];

            if(mail($toemail, $subject, $body, $headers))
            {
              echo "<br>Feedback successfully received by administration!";
            }
            else {
              echo "Error sending the feedback!";
            }
          }
          else
          {
            echo "Email sending failed...";
          }
    }
}
?>