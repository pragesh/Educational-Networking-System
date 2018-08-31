<?php


 session_start();
 include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

 $email=$_SESSION['user_name'];
 $qid=$_POST['qid'];
  $name=$_POST['name'];
  $z=$_POST['y'];

$query2="INSERT INTO Bookmark(QID,Email,Name,Course_Name) VALUES('$qid','$email','$name','$z')";
$result2=mysql_query($query2);

 


?>