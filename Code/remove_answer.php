<?php


 session_start();
 include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

// $course_name =mysql_real_escape_string($_POST["course_name"]);
 //$title =mysql_real_escape_string($_POST["title"]);
$qid=$_GET['qid'];
$aid=$_GET['aid'];
$course_name=$_GET['y'];

 $email=$_SESSION['user_name'];

 


$query3="DELETE FROM Answer WHERE AID='$aid'"; 
$result3=mysql_query($query3);

$query4="DELETE FROM Answer_Rating WHERE AID='$aid'"; 
$result4=mysql_query($query4);

header('Location: answer.php?qid='."$qid".'&y='."$course_name");
 


?>