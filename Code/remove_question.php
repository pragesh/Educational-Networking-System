<?php


 session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

// $course_name =mysql_real_escape_string($_POST["course_name"]);
 //$title =mysql_real_escape_string($_POST["title"]);
$qid=$_GET['qid'];
$course_name=$_GET['y'];

 $email=$_SESSION['user_name'];

 $query="DELETE FROM Question WHERE QID='$qid'";
 $result=mysql_query($query);



$query3="DELETE FROM Answer WHERE QID='$qid'"; 
$result3=mysql_query($query3);

$query4="DELETE FROM Bookmark WHERE QID='$qid'"; 
$result4=mysql_query($query4);

header('Location: course_room.php?y='."$course_name");
 


?>