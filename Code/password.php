
<?php
session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
$email=$_SESSION['user_name'];
$pass = mysql_real_escape_string($_POST['pass']);
$pass1= mysql_real_escape_string($_POST['pass1']);
$sql1="SELECT Password from End_User WHERE Email='$email'";

$result1=mysql_query($sql1);
while($row=mysql_fetch_array($result1))
{
    if($row['Password']==$pass)
    {
        
      $sql="UPDATE End_User SET Password='$pass1' WHERE Email='$email'";
      $result=mysql_query($sql);
      $p=1;
       header('Location: changepassword.php?z='."$p");
        exit;
    }
}    
//include 'update_profile.php';

$p=2;
header('Location: changepassword.php?z='."$p");



?>