
<?php
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");



// escape variables for security

$url = $_GET['url'];
$college = $_GET['collegename'];

$college = preg_replace('/\_+/', ' ', $college);
 
$sql="INSERT INTO College(College_Name,URL) VALUES('$college','$url')";

$result=mysql_query($sql);
if($result)
echo '<script>alert("College Added in Database")</script>';
else echo '<script>alert("Unable to Add college")</script>';



?>