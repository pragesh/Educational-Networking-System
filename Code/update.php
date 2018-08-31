
<?php
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");



// escape variables for security
$firstname = mysql_real_escape_string($_POST['first']);
$lastname = mysql_real_escape_string($_POST['last']);
$gender = mysql_real_escape_string($_POST['gen']);
$dob = mysql_real_escape_string($_POST['dob']);
$email=mysql_real_escape_string($_POST['email']);
$url = mysql_real_escape_string($_POST['url']);
$designation = mysql_real_escape_string($_POST['design']);
$college = mysql_real_escape_string($_POST['college']);
$about = mysql_real_escape_string($_POST['about']);

 
$sql="UPDATE End_User SET Firstname='$firstname', Lastname='$lastname', Gender='$gender',DOB='$dob',URL='$url',Designation='$designation',College='$college',About='$about' WHERE Email='$email'";

$result=mysql_query($sql);
//include 'update_profile.php';

$p=1;
header('Location: update_profile.php?z='."$p");



?>