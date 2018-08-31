
<?php
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");



// escape variables for security

$course_name= $_GET['coursename'];
$category = $_GET['category'];

$course_name = preg_replace('/\_+/', ' ', $course_name);
$category = preg_replace('/\_+/', ' ', $category);
 
$sql="INSERT INTO Courses(Course_Name,Category) VALUES('$course_name','$category')";

$result=mysql_query($sql);
if($result)
echo '<script>alert("Course Added in Database")</script>';
else echo '<script>alert("Unable to Add Course")</script>';



?>