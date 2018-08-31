<?php

 session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
if(isset($_POST["user"]) && isset($_POST["pass"]))
{$email =mysql_real_escape_string($_POST["user"]);
 $password =mysql_real_escape_string($_POST["pass"]);
 
 $query="SELECT * FROM End_User WHERE Email='$email' AND Password='$password' AND com_code IS NULL";
 $result=mysql_query($query);
 $numrows = mysql_num_rows($result);
if($numrows > 0) { $_SESSION['user_name']=$email; header('Location: demo3.php');}
 else {include 'index.php'; echo "<script>alert('Invalid Email or Password !!')</script> ";/*$error=true; $message="Invalid Email or Password !!";header('Location : index.php?message='.$message.'error='.$error);*/ }
}

?>