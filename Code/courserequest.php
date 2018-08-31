<?php

 include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
$admin="umangjalan.vitu@gmail.com";

$email=$_POST['email'];
$course_name=$_POST['course_name'];
$category=$_POST['category'];
$query="SELECT * FROM Courses WHERE Course_Name='$course_name'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
$cou = preg_replace('/\s+/', '_', $course_name);
$cat = preg_replace('/\s+/', '_', $category);
$com_code = md5(uniqid(rand()));
$tom_code = md5(uniqid(rand()));
if($count==0)
{
   $to = $admin;
   $subject = "New Course Registration Request";
   $header = "EduNet: Confirmation from EduNet";
   $message = "New Course Registration Request from $email";
   $message .="\n";
   $message .="Course Name : $course_name";
   $message .="\n";
   $message .="Course Category : $category";
   $message .="\n";
   $message .="For Registering Course Click : http://localhost/Edunet/updatecoursedb.php?passkey=$com_code&coursename=$cou&category=$cat";
   $message .="\n";
   $message .="For Notifying User : http://localhost/Edunet/notifyusercourse.php?passkey=$tom_code&email=$email&coursename=$cou";
   $sentmail = mail($to,$subject,$message,$header);
   if($sentmail)
            {
      include 'suggestcourse.php';
   echo "<script>alert('Request Sent Successfully.')</script>";
   }
   else
         {include 'suggestcourse.php';
    echo "<script>alert('Unable to Send Request')</script>";
   }
}
else {include 'suggestcourse.php'; echo "<script>alert('Course Already Exists')</script>";}

?>