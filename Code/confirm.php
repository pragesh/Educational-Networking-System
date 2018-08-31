
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EduNet | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
      <style>
      body{
      background-color:rgba(210, 222, 239, 0.98);
      }
          
      </style>
  </head>
  <body>
      <?php
  include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
 $passkey = $_GET['passkey'];
 $sql = "UPDATE End_User SET com_code=NULL WHERE com_code='$passkey'";
 $result = mysql_query($sql);
 if($result)
 {
    $link="index.php";
     $y="close";
 echo '<div data-alert class="alert-box warning radius"><a href="index.html">Your account is now active.  Click to Log in</a></div>';
}
 else
 {
  echo "Some error occur.";
 }
?>
        <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
       <script src="js/foundation/foundation.abide.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
