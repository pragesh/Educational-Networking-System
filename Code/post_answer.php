<?php


 session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

// $course_name =mysql_real_escape_string($_POST["course_name"]);
 //$title =mysql_real_escape_string($_POST["title"]);
$qid=$_GET['qid'];
$course_name=$_GET['y'];

$answer=mysql_real_escape_string($_POST["answer"]);
 $email=$_SESSION['user_name'];

 $query="SELECT Firstname FROM End_User WHERE Email='$email'";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result))
 {
      $name=$row['Firstname'];
 }
$rating=0;
$query3="UPDATE Question SET Status=1 WHERE QID='$qid'"; 
$result3=mysql_query($query3);

$query2="INSERT INTO Answer(A_Text,QID,Email,Name,Rating) VALUES('$answer','$qid','$email','$name','$rating')";
$result2=mysql_query($query2);
header('Location: answer.php?qid='."$qid".'&y='."$course_name");
 


?>