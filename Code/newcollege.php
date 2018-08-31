<?php

include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
$admin="umangjalan.vitu@gmail.com";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$college_name=$_POST['college_name'];
$url=$_POST['url'];
$query="SELECT * FROM College WHERE College_Name='$college_name'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
$com_code = md5(uniqid(rand()));
$tom_code = md5(uniqid(rand()));
$coll =$college_name;
$coll = preg_replace('/\s+/', '_', $coll);
if($count==0)
{  
   $to = $admin;
   $subject = "New College Registration Request";
   $header = "EduNet: Confirmation from EduNet";
   $message = "New College Registration Request from $email";
   $message .="\n";
   $message .="Name : $firstname ";
   $message .="$lastname ";
   $message .="\n";
   $message .="College Name : $college_name";
   $message .="\n";
   $message .="College URL : $url";
   $message .="\n";
   $message .="For Registering College Click : http://edunet.hostingsiteforfree.com/Edunet/updatecollegedb.php?passkey=$com_code&collegename=$coll&url=$url";
   $message .="\n";
   $message .="For Notifying User : http://edunet.hostingsiteforfree.com/Edunet/notifyusercollege.php?passkey=$tom_code&email=$email&collegename=$coll";
   $sentmail = mail($to,$subject,$message,$header);
   if($sentmail)
            {
      include 'registernewcollege.php';
   echo "<script>alert('Request Sent Successfully.')</script>";
   }
   else
         {include 'registernewcollege.php';
    echo "<script>alert('Unable to Send Request')</script>";
   }
}
else {include 'registernewcollege.php'; echo "<script>alert('College Already Exists')</script>";}

?>