<?php


 session_start();
 include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

// $course_name =mysql_real_escape_string($_POST["course_name"]);
 //$title =mysql_real_escape_string($_POST["title"]);

$course_name=$_GET['y'];

 $email=$_SESSION['user_name'];

 $query="DELETE FROM Registered_Course WHERE Email='$email' and Course_Name='$course_name'";
 $result=mysql_query($query);

$query4="DELETE FROM Bookmark WHERE Email='$email' and Course_Name='$course_name'"; 
$result4=mysql_query($query4);

header('Location: demo3.php');
 


?>