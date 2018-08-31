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
    
    <style type="text/css">
      body, html {
          /*min-height:1000px;*/
          height: 700px;;
          
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
        <ul class="title-area">
         <li class="name"><h1><a href="course_room.php?y=<?php $c=$_GET['y']; echo "$c" ?>"><?php $c=$_GET['y'];echo "$c" ?></a></h1></li>
       </ul>
    <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right" >
      <li><a href="#">Welcome <?php  $y=$_SESSION['user_name']; echo "$y" ?></a></li>
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
         <div class="row">
          <div class="large-12 columns">
             <h4 style="font-family:enriqueta-bold,Garamond,serif;"><b>New Question</b></h4>
             
             </div>
             <hr/>
          </div>
          <div class="row">
      <div class="large-3 columns" ><!-- <img src="2.jpg" class="left" style="width:2128px; height:600px;"> --></div>
      <div class="large-9 columns">
<form action="post.php" method="post" data-abide >
  
    
      <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="name-field" ><label><input type="text" name="course_name" value='<?php $c=$_GET['y'];echo "$c" ?>' readonly></label>
                      <small class="error">Name is required and must be a string.</small></div>   
                  </div>
              </div>
          </div>
        </div>
      <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="name-field" ><label><input type="text" required pattern="[a-zA-Z]+" name="title" placeholder="Title" required></label>
                      <small class="error">Name is required and must be a string.</small></div>   
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
                     <textarea name="question" rows="10" placeholder="Post Your Question" required></textarea>      
                      <small class="error"> Question is required</small>
                  </div> 
              </div>
          </div>
        </div>
      <div class="row">
          
          <div class="large-12 columns">
          <button type="submit" class="button secondary radius" value="Post"> Post </button>
           <a class="button radius" href="course_room.php?y=<?php $c=$_GET['y']; echo "$c" ?>"> Go Back</a>
               </div>
    </div>
      
</form>
 </div>
              </div>

    
    </div>
    </div>
       <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
       <script src="js/foundation/foundation.abide.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>