<?php
session_start();
$username=$_SESSION['user_name'];
$qid=$_GET['qid'];
 include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
 $query="DELETE FROM Bookmark WHERE QID='$qid' AND Email='$username'";
 $result=mysql_query($query);
header('Location: bookmarkquestion.php');
?>

