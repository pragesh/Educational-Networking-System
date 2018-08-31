<?php


 session_start();
  include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

$aid=$_GET['aid'];
$uid=$_SESSION['user_name'];
$rate=$_GET['rate'];
$qid=$_GET['qid'];
$course_name=$_GET['y'];
 $query="SELECT * FROM Answer_Rating WHERE UID='$uid' AND AID='$aid'";
 $result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0){
    while($row=mysql_fetch_array($result))
    {
        $rating=$row['Rating'];
        if($rating==1 && $rate==-1)
        {
            $x=-1;
            $query4="Update Answer_Rating SET Rating='$rate' WHERE AID='$aid' AND UID='$uid'";
            $result4=mysql_query($query4);
        }
        else if($rating==-1 && $rate==1) { $x=1;
            $query5="Update Answer_Rating SET Rating='$rate' WHERE AID='$aid' AND UID='$uid'";
            $result5=mysql_query($query5);}
        else $x=0;
    }
    $query="Update Answer SET Rating=Rating+'$x' WHERE AID='$aid'";
    $result3=mysql_query($query);
    
}
else{

$query2="INSERT INTO Answer_Rating(AID,UID,Rating) VALUES('$aid','$uid','$rate')";
$result2=mysql_query($query2);
$query="Update Answer SET Rating=Rating+'$rate' WHERE AID='$aid'";
$result3=mysql_query($query);

}
header('Location: answer.php?qid='."$qid".'&y='."$course_name");
 


?>