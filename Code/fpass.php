<?php
session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
if(isset($_POST['email']))
{
$email=$_POST['email'];
$query="SELECT Password FROM End_User WHERE Email='$email'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0)
{  
    while($row=mysql_fetch_array($result))
    {
        $pass=$row['Password'];
    
   $to = $email;
   $subject = "Password Retrieval";
   $header = "EduNet: Forgot Password";
   $message = "Email : $email";
   $message .="\n";
   $message .="Password : $pass ";
   $sentmail = mail($to,$subject,$message,$header);
   if($sentmail)
            {
      include 'forgotpassword.php';
   echo "<script>alert('Request Sent Successfully.')</script>";
   }
   else
         {include 'forgotpassword.php';
    echo "<script>alert('Unable to Send Request')</script>";
   }
    }
}
else {include 'forgotpassword.php'; echo "<script>alert('Email Not Registered')</script>";}
}

?>