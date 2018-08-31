<?php
session_start();
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
         /*min-height:800px;*/
          height: auto;
         
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
              
          </div> 
          <div class="row">
             <div class="large-12 columns">
                 <form method="post" action="">
                 <select name="category">
                     <option></option>
                     
                     
                     
                     </select>
                 </form>
              
              </div>
          
          <hr />
          </div> -->
 <div class="row">
     <div class="large-12 columns">
         <div class="panel" style="height:200px;background-image:url('cover.jpg');">
              
              <h1 style="color:white; font-family:'enriqueta-bold',Garamond,serif;"><b>Welcome To Edunet !</b></h1><h3 style="color:white; font-family:'enriqueta-bold',Garamond,serif;"><b>Your Doubt is not just yours now.</b></h3>
                
             <!--<img src=cover.jpg style="backgorund-url('cover.jpg');">-->
              <form action=<?php echo $_SERVER['PHP_SELF']  ?> method="post">
    <li class="has-form" style="list-style:none;">
  <div class="row collapse">
      
    <div class="large-4 small-4 columns">
      <input name="ser" type="search" style="height:45px;" placeholder="Search Course">
    </div>
    <div class="large-1 small-1 columns">
      <button type="submit" class="alert button small">Search</button>
    </div>
      <div class="large-7 small-7 columns">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="courses.php" class="button success small">All Courses</a>
    </div>
  
      </div>
</li>
                
        
     
             </form>
         </div>
        
        </div>    
        
    </div>
          

          <div class="row">
            <div class="large-12 columns">
              <h4 style="font-family:'enriqueta-bold',Garamond,serif;"
><b>Courses</b></h4>
                <hr />
          </div>
              
      </div> 
          <?php 
            
            include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
            $username=$_SESSION['user_name'];
            if(isset($_POST['ser']) && $_POST['ser']!== ' ' && strlen($_POST['ser']) >= 1)
               {
                //$html3='';
                   //    $html3.='<div class="row"><div class="large-12 columns"><h3 style="font-family:enriqueta-bold,Garamond,serif;"><b>No Results Found</b></h3></div></div><div class="row"><div class="large-12 columns"><hr /></div></div>';
                 $search_string= $_POST['ser'];
                      
                    // Check Length More Than One Character
                    if (strlen($search_string) >= 1 && $search_string !== ' ') {
                $query='SELECT * FROM Courses WHERE Course_Name LIKE "%'.$search_string.'%" AND Course_Id NOT IN (SELECT Course_Id FROM Registered_Course WHERE Email="'.$username.'")';
            $result=mysql_query($query);
            $count=mysql_num_rows($result);
                    if($count>0)
                    {while($temp=mysql_fetch_array($result))
        {$x=$temp['Course_Name'];
         $cat=$temp['Category'];
         //$u='<b>'.$search_string.'</b>';
         $y = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $temp['Course_Name']);
         //str_replace($search_string,$u,$x);
        echo '<div class="row" >
            <div class="large-2 columns" >
                <img src="courses/'.$x.'.jpg">
            </div>
           <div class="large-10 columns" >
                <div class="row">
               <div class="small-9 columns">
                <div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif;">'.
                 "<h3>$y<h3>". 
               '</div>
                   
                </div>
              
               
               
                   <div class="small-3 columns right">
                <a href="addcourse.php?y='.$x.'" class="button success radius small">Add Course</a>
                </div>
              
              </div>
                    <div class="row">
               <div class="small-9 columns">
                <div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif;">'.
                 "<h6 style='color:rgba(120, 157, 237, 0.98);'>$cat</h6>". 
               '</div>
                   
                </div>
              
               
               
                   <div class="small-3 columns right">
                </div>
              
              </div>

          
          </div><div class="row"><div class="large-12 columns"><hr /></div></div>
                    </div> ';
        }
                  
        }
                           else{
                    //$output=$html3;
                     echo '<div class="row"><div class="large-12 columns"><h3 style="font-family:enriqueta-bold,Garamond,serif;"><b>No Results Found</b></h3></div></div><div class="row"><div class="large-12 columns"><hr /></div></div>';
                        }
                        
        }
                
            }
            else{
             $query="SELECT * FROM Courses WHERE Course_Id NOT IN (SELECT Course_Id FROM Registered_Course WHERE Email='$username')";
            $result=mysql_query($query);
        while($temp=mysql_fetch_array($result))
        {$x=$temp['Course_Name'];
         $cat=$temp['Category'];
        echo '<div class="row" >
            <div class="large-2 columns" >
                <img src="courses/'.$x.'.jpg">
            </div>
           <div class="large-10 columns" >
                <div class="row">
               <div class="small-9 columns">
                <div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif;">'.
                 "<h3>$x<h3>". 
               '</div>
                   
                </div>
              
               
               
                   <div class="small-3 columns right">
                <a href="addcourse.php?y='.$x.'" class="button success radius small">Add Course</a>
                </div>
              
              </div>
                    <div class="row">
               <div class="small-9 columns">
                <div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif;">'.
                 "<h6 style='color:rgba(120, 157, 237, 0.98);'>$cat</h6>". 
               '</div>
                   
                </div>
              
               
               
                   <div class="small-3 columns right">
                </div>
              
              </div>

          
          </div><div class="row"><div class="large-12 columns"><hr /></div></div>
                    </div> ';
        }
               }
          ?>
    
    </div>
    </div>
  </body>
</html>
  
               
            