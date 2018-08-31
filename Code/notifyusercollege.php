<?php
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

$email=$_GET['email'];
$college = mysql_real_escape_string($_GET['collegename']);
$college = preg_replace('/\_+/', ' ', $college);
   $to = $email;
   $subject = "New College Registration Approved";
   $header = "EduNet: Confirmation from EduNet";
   $message = "Your Request for adding $college has been approved";
   $sentmail = mail($to,$subject,$message,$header);
   if($sentmail)
            {
   echo "<script>alert('Request Sent Successfully.')</script>";
   }
   else
         {
    echo "<script>alert('Mail not Sent')</script>";
   }


?>