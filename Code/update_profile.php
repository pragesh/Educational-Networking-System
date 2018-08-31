<?php

session_start();

?>


<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");


$email=$_SESSION['user_name'];


 $query="SELECT * FROM End_User WHERE Email='$email'";

 $result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
$firstname = $row['Firstname'];
$lastname = $row['Lastname'];
$email = $row['Email'];
$password = $row['Password'];
$gender = $row['Gender'];
$dob = $row['DOB'];
$url = $row['URL'];
$designation = $row['Designation'];
$college = $row['College'];
$about = $row['About'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> -->
    <title>EduNet</title>
    <script type="text/javascript" src="jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jquery.touchSwipe.min.js"></script>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script></script>
    <style type="text/css">
      body, html {
       min-height:800px;
          /*height: auto;*/
         
          margin: 0;
          /* overflow:scroll; */
          font-family: helvetica;
          font-weight: 100;
      }
      .container {
          position: relative;
          height: 100%;
          width: 100%;
          left: 0;
          -webkit-transition:  left 0.4s ease-in-out;
          -moz-transition:  left 0.4s ease-in-out;
          -ms-transition:  left 0.4s ease-in-out;
          -o-transition:  left 0.4s ease-in-out;
          transition:  left 0.4s ease-in-out;
      }
      .container.open-sidebar {
          left: 240px;
      }
      
      .swipe-area {
          position: absolute;
          width: 50px;
          left: 0;
      top: 0;
           height: 100%;
          background: #f3f3f3;
          z-index: 0;
      }
      #sidebar {
          background: rgba(120, 157, 237, 0.98);
          position: absolute;
          width: 240px;
          height: 100%;
          left: -240px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      }
      #sidebar ul {
          margin: 0;
          padding: 0;
          list-style: none;
      }
      #sidebar ul li {
          margin: 0;
      }
      #sidebar ul li a {
          padding: 15px 20px;
          font-size: 16px;
          font-weight: 100;
          color: white;
          text-decoration: none;
          display: block;
          border-bottom: 1px solid rgba(120, 157, 237, 0.98);
          -webkit-transition:  background 0.3s ease-in-out;
          -moz-transition:  background 0.3s ease-in-out;
          -ms-transition:  background 0.3s ease-in-out;
          -o-transition:  background 0.3s ease-in-out;
          transition:  background 0.3s ease-in-out;
      }
      #sidebar ul li:hover a {
          background: rgba(174, 208, 240, 0.98);
      }
      .main-content {
          width: 100%;
          height: 100%;
          padding: 10px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          position: relative;
      }
      .main-content .content{
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      padding-left: 60px;
      width: 100%;
      }
      .main-content .content h1{
          font-weight: 100;
      }
      .main-content .content p{
          width: 100%;
          line-height: 160%;
      }
      .main-content #sidebar-toggle {
          background: rgba(120, 157, 237, 0.98);
          border-radius: 3px;
          display: block;
          position: relative;
          padding: 10px 7px;
          float: left;
      }
      .main-content #sidebar-toggle .bar{
           display: block;
          width: 18px;
          margin-bottom: 3px;
          height: 2px;
          background-color: #fff;
          border-radius: 1px;   
      }
      .main-content #sidebar-toggle .bar:last-child{
           margin-bottom: 0;   
      }
    </style>
    <script type="text/javascript">
      $(window).load(function(){
        $("[data-toggle]").click(function() {
          var toggle_el = $(this).data("toggle");
          $(toggle_el).toggleClass("open-sidebar");
        });
         $(".swipe-area").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="right") {
                           $(".container").addClass("open-sidebar");
                           return false;
                      }
                      if (phase=="move" && direction =="left") {
                           $(".container").removeClass("open-sidebar");
                           return false;
                      }
                  }
          }); 
      });
      
    </script>
  </head>
  <body>
   <nav class="top-bar">
       <!-- <ul class="title-area">
         <li class="name"><h1><a href="demo3.html">Edunet</a></h1></li>
       </ul>-->
    <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right" >
      <li><a href="#">Welcome <?php $y=$_SESSION['user_name']; echo "$y" ?></a></li>
    </ul>

    <!-- Left Nav Section 
    <ul class="left">
      <li><a href="#">Left Nav Button</a></li>
    </ul>
  </section>-->
    </nav> 
    <div class="container">
      <div id="sidebar">
          <ul>
              <li ><a href="demo3.php">Course Dashboard</a></li>
              <li><a href="update_profile.php?z=0">Update Profile</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="changepassword.php?z=0">Change Password</a></li>
              <li><a href="suggestcourse.php">Suggest Courses</a></li>
              <li><a href="searchquestion.php">Search Question</a></li>
			  <li><a href="bookmarkquestion.php">Bookmarked Question</a></li>
                  <li><a href="logout.php">Log Out</a></li>
          </ul>
      </div>
    <!-- <div class="row">
     <div class="large-12 columns">
         <div class"panel">
           <img src="cover.jpg">
         </div>
        
        </div>    
        
    </div> -->
        
      <div class="main-content">
          
          <div class="swipe-area"></div>
          <a href="#" data-toggle=".container" id="sidebar-toggle">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
         <!--  <div class="content">
              <div style="color:white; background-color:rgba(120, 157, 237, 0.98); margin:-20px -20px -20px -20px"><span><h1 style="color:white;" >Welcome To EduNet </h1></span><span><h5 style="color:white;"><i>Your Doubts is not just yours now !</i><h5></span></div>
			   <hr />
              
          </div> -->
          
          <div class="row">
            <div class="large-12 columns">
              <h2 style="font-family:'enriqueta-bold',Garamond,serif;"
><b>My Profile</b></h2>
                <hr />
          </div>
              
      </div> 
          <div class="row"><div class="large-12 columns"></div> </div>
           <div class="row">
      <div class="large-3 columns" ><!-- <img src="2.jpg" class="left" style="width:2128px; height:600px;"> --></div>
      <div class="large-9 columns">
<form action="update.php" method="post" data-abide >
  
    
      
      <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="name-field" ><label><input type="text" required pattern="[a-zA-Z]+" name="first"value="<?php echo "$firstname" ?>"></label>
                      <small class="error">Name is required and must be a string.White Spaces not allowed.</small></div>   
                  </div>
              </div>
          </div>
        </div>
       <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!--<div class="small-3 columns">
                 <!-- <label class="right inline"><b> Last Name </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="name-field"><label><input type="text" required pattern="[a-zA-Z]+" name="last" value="<?php echo "$lastname" ?>"></label>
                      <small class="error">Name is required and must be a string.White Spaces not allowed.</small></div> 
                  </div> 
              </div>
          </div>
        </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b>Email </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="email-field"><label><input type="email" name="email" value="<?php echo "$email" ?>" required Readonly></label>
                      <small class="error">An valid email address is required.</small></div> 
                  </div> 
              </div>
          </div>
        </div>

  
        
       <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right"><b> Gender </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <input type="radio" name="gen" value="Male" id="m" <?php if (isset($gender) && $gender=="Male") echo "checked";?> ><label for="m"><b>Male</b></label>
                  <input type="radio" name="gen" value="Female" id="f" <?php if (isset($gender) && $gender=="Female") echo "checked";?>><label for="f"><b>Female</b></label>
                  </div> 
              </div>
          </div>
        </div>
      <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b> DOB </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                    <div class="row collapse">
                      <div class="small-3 columns large-4">
                        <span class="prefix">MM/DD/YYYY</span>
                        
                        </div>
                        <div class="small-6 columns large-8">
                            <div class="name-field">
                            <label><input type="text" id="db" name="dob" pattern="month_day_year" value="<?php echo "$dob" ?>" required></label>
                            <small class="error">MM/DD/YYYY is required.</small></div> 
                            </div>
                        
                        </div>
                      
                      </div>
                  </div> 
              </div>
          </div>
        
       
       <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right"><b>Designation </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                      
                      <select name="design" required>
                        <option value="" >Select Your Designation</option>
                        <option value="Student" <?php if (isset($designation) && $designation=="Student") echo "selected";?> >Student</option>
                        <option value="Faculty" <?php if (isset($designation) && $designation=="Faculty") echo "selected";?> >Faculty</option>
                      </select> 
                    <small class="error">Please choose the correct answer.</small> 
                      
                  </div> 
              </div>
          </div>
        </div>
      
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b> College </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                         <?php

                         
                         $email=$_SESSION['user_name'];
                         include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
                         $query1="SELECT College FROM End_User WHERE Email='$email'";
                         global $coll;
                         $result1=mysql_query($query1);
                         
                        while($temp2=mysql_fetch_array($result1)){
                            $coll=$temp2['College'];
                        }
                         $query="SELECT * FROM College";
                         $result=mysql_query($query);
                         echo '<select name="college" required>';
                        echo '<option value="">Select Your College</option>';
                        while($temp=mysql_fetch_array($result)){
                           $college=$temp['College_Name'];
                            $selected="";
                             if ($college==$coll) $selected="selected";
                            echo "<option value='{$college}' {$selected}>{$college}</option>";
                        }
                       
                         echo '</select>';
                        ?>
                        
                      <small class="error">Please choose the correct answer.</small> 
                        
                      </div>
                  
                  </div> 
              </div>
          </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b> URL </b></label> 
                  </div> -->
                  <div class="small-9 columns">
                    <div class="row collapse">
                      
                        <div class="small-12 columns large-12">
                            
                            <input type="url" name="url" id="ur" value="<?php echo "$url" ?>" >
                           
                        </div>
                        
                      
                      </div>
                  </div> 
              </div>
          </div>
        </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b> About You </b></label>
                  </div> -->
                  <div class="small-9 columns">
                     <textarea name="about" ><?php echo "$about" ?></textarea>              
                  </div> 
              </div>
          </div>
        </div>
      <div class="row">
          <div class="large-3 columns"></div> 
          <div class="large-9 columns">
          <button type="submit" class="button radius" value="Update">Update</button>
        
               </div>
    </div>
     
</form>
 </div>
  
  </div> 
    
    </div>
    </div>
       <?php if($_GET['z']==1) phpAlert("Profile Updated Sucessfully"); ?>
       <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
       <script src="js/foundation/foundation.abide.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>