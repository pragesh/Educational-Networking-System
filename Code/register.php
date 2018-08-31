<?php
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");


// escape variables for security
if(isset($_POST['first']))
{$firstname = mysql_real_escape_string($_POST['first']);
$lastname = mysql_real_escape_string($_POST['last']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['pass']);
$gender = mysql_real_escape_string($_POST['gen']);
$dob = mysql_real_escape_string($_POST['dob']);
$url = mysql_real_escape_string($_POST['url']);
$designation = mysql_real_escape_string($_POST['design']);
$college = mysql_real_escape_string($_POST['college']);
$about = mysql_real_escape_string($_POST['about']);
$com_code = md5(uniqid(rand()));
 $query="SELECT * FROM End_User WHERE Email='$email'";

 $result=mysql_query($query);
 $numrows = mysql_num_rows($result);
if($numrows > 0) {include 'index.php'; echo "<script>alert('Email Already Registered !!')</script> ";/* $error=true; $message="Email Already Registered";header('Location : index.php?message='.$message.'error='.$error);*/}
 else {

$sql="INSERT INTO End_User(Firstname, Lastname, Email,Password,Gender,DOB,URL,Designation,College,About,com_code)
VALUES('$firstname', '$lastname', '$email','$password','$gender','$dob','$url','$designation','$college','$about','$com_code')";

$result=mysql_query($sql);
     
if($result)
{
   $to = $email;
   $subject = "Confirmation from EduNet to $firstname";
   $header = "EduNet: Confirmation from EduNet";
   $message = "Please click the link below to verify and activate your account. ";
   $message .= "http://edunet.hostingsiteforfree.com/Edunet/confirm.php?passkey=$com_code";
   $sentmail = mail($to,$subject,$message,$header);
 /*$headers = ‘MIME-Version: 1.0′ . “\r\n”;
  $headers .= ‘Content-type: text/html; charset=iso-8859-1′ . “\r\n”;
  $headers .= ‘From: sender@sender.com’ . “\r\n”;
   $sentmail=mail(“you@yourdomain.com”,”test subject”,”test body”,$headers);*/
   if($sentmail)
            {
       include 'index.php';
   echo "<script>alert('Your Confirmation link Has Been Sent To Your Email Address.')</script>";
       /*$error=true; $message="Your Confirmation link Has Been Sent To Your Email Address";header('Location : index.php?message='.$message.'error='.$error);*/
   }
   else
         {include 'index.php';
    echo "<script>alert('Cannot send Confirmation link to your e-mail address')</script>";
            /*$error=true; $message="Cannot send Confirmation link to your e-mail address";header('Location : index.php?message='.$message.'error='.$error);*/
          
   }
}
else {include 'index.php'; echo "<script>alert('Not Registered!!')</script> ";
   /*  $error=true; $message="Not Registered!!";header('Location : index.php?message='.$message.'error='.$error);*/}
}
}
?>