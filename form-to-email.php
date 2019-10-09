<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];



  $subject = 'Website Submission Form From $name';

  $to = 'andrew.yan@alumni.ubc.ca';
  $headers = "From: $visitor_email\r\n";
  mail($to,$subject,$message,$headers);
?>
