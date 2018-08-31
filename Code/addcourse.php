<?php


 session_start();
  include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

// $course_name =mysql_real_escape_string($_POST["course_name"]);
 //$title =mysql_real_escape_string($_POST["title"]);
$course_name=$_GET['y'];

 $email=$_SESSION['user_name'];

 $query="SELECT Course_Id FROM Courses WHERE Course_Name='$course_name'";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result))
 {
      $cid=$row['Course_Id'];
 }


$query2="INSERT INTO Registered_Course(Email,Course_Id,Course_Name) VALUES('$email','$cid','$course_name')";
$result2=mysql_query($query2);
header('Location: courses.php');
 


?>