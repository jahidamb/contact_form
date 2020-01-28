<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
</head>
<body>


<form method="post" class="myform" action="">
       <input type="text" name="name" id="name" placeholder="Your Name" required><br>
       <input type="email" name="email" id="email" placeholder="Your Email" required><br>
       <textarea rows="4" cols="20" name="message" id="message" placeholder="Your Message"></textarea><br>
       <input type="submit" id="formsub" name="submit" value="Send"> <span class="output_message"></span>
 </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<?php
   if (isset($_POST['submit'])) {
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $message = $_REQUEST['message'];

     $to = 'jahidhasancmt4@gmail.com';
     $subject = 'Website Designer';
     $headers = "From: ".$name." <".$email."> \r\n";
     $send_email=mail($to,$subject,$message,$headers);
  
     echo ($send_email) ? 'successfully Submit' : 'error';
     

}?>

</body>
</html>