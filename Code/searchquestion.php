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
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="scripts/custom.js"></script>
      
    <style type="text/css">
      body, html {
          min-height:400px;*/
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
        div.icon {
	margin-top: 4px;
	float: left;
	width: 31px;
	height: 30px;
	background-image: url(../images/magnify.gif);
	background-repeat: no-repeat;
	-webkit-transition-property: background-position, color;
	-webkit-transition-duration: .2s, .1s;
	-webkit-transition-timing-function: linear, linear;
	-moz-transition-property: background-position, color;
	-moz-transition-duration: .2s, .1s;
	-ms-transition-duration: .2s, .1s;
	-ms-transition-timing-property: linear, linear;
	-o-transition-property: background-position, color;
	-o-transition-duration: .2s, .1s;
	-o-transition-timing-property: linear, linear;
	transition-property: background-position, color;
	transition-duration: .2s, .1s;
	transition-timing-property: linear, linear;
}
div.icon:hover {
	background-position: 0px -30px;
	cursor: pointer;
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
         <!--  <div class="content">
              <div style="color:white; background-color:rgba(120, 157, 237, 0.98); margin:-20px -20px -20px -20px"><span><h1 style="color:white;" >Welcome To EduNet </h1></span><span><h5 style="color:white;"><i>Your Doubts is not just yours now !</i><h5></span></div>
			   <hr />
              
          </div> -->
            <div class="row">
     <div class="large-12 columns">
         <div class="panel" style="height:200px;background-image:url('cover.jpg');"> 
              
              <h1 style="color:white; font-family:'enriqueta-bold',Garamond,serif;"><b>Welcome To Edunet !</b></h1><h3 style="color:white; font-family:'enriqueta-bold',Garamond,serif;"><b>Your Doubt is not just yours now.</b></h3> 
               <!--  <div class="row">
                    <div class="large-12 columns">
                        
                        <form action=//php echo $_SERVER['PHP_SELF']  method="post">
                            
             <div class="small-8 columns"><input type="search" id="search" name="ser" style="height:45px;" placeholder="Type Your Question Here"></div>
                            <div class="small-4 columns"><button type="submit" class="medium button success small">Search</button></div>
                            </form>
                            
             <!--<img src=cover.jpg style="backgorund-url('cover.jpg');">
         </div>
        
        </div> -->
            <form action=<?php echo $_SERVER['PHP_SELF']  ?> method="post">
    <li class="has-form" style="list-style:none;">
  <div class="row collapse">
    <div class="large-5 small-6 columns">
      <input name="ser" type="search" style="height:45px;" placeholder="Type Your Question Here">
    </div>
    <div class="large-3 small-4 columns">
      <button type="submit" class="alert button small">Search</button>
    </div>
      <div class="large-4 small-2 columns">
      
    </div>
  </div> 
</li>
                
        
     
             </form>
         </div></div>
          <!-- <div class="row">
            <div class="large-12 columns">
              <h4 style="font-family:'enriqueta-bold',Garamond,serif;"
><b>Similar Questions</b></h4>
                <hr />
          </div>
            
      </div> -->
                <?php 
            
            //$z=$_GET['y'];
//session_start();
global $output;
            include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");
                   if(isset($_POST['ser']))
                   {
                   
                    $html ='';

                     $html.='<div class="row">';
$html.='<div class="large-2 columns">';
        $html.= '<div class="row">';
        $html.= '<img src="http://localhost/Edunet/courses/Coursename.jpg"></div>';
        $html.= '</div>';
        $html.= '<div class="large-10 columns">
                <div class="row">
               <div class="small-12 columns">
                <div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif;">
                 <h3>nameString</h3>
               </div>
                   
                </div>
              </div>
               <div class="row">
               <div class="small-5 columns">
                 <h6 style="font-family:enriqueta-bold,Garamond,serif"><b>Posted by Username , Collegename</b></h6><span><a href="urlString" class="button small success radius" style="padding:10px;width:70px;">View</a><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>';
          $html2='';
            $html2.='</div>
                   <div class="small-3 columns">
                   </div>
                   <div class="small-4 columns right">
                
                </div>
              </div>
              </div>
          
          </div> <div class="row"><div class="large-12 columns"><hr /></div></div>';
                       $html3='';
                       $html3.='<div class="row"><div class="large-12 columns"><h3 style="font-family:enriqueta-bold,Garamond,serif;"><b>No Results Found</b></h3></div></div><div class="row"><div class="large-12 columns"><hr /></div></div>';
                    /*$html .= '<div class="row">';
                    $html .= '<div class="large-12 columns">';
                    $html .= '<div class="row">';
                    $html .= '<div class="small-12 columns">';
                    $html .= '<div id="course_list" style="font-size:15px; font-family:"enriqueta-bold",Garamond,serif">';
                    $html .= '<a target="_blank" href="urlString">';
                    $html .= '<h3 style="color:#0c0cf5;">nameString</h3>';
                    $html .= '</a>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    
                    $html .= '</div>';
                    $html .= '<div class="row"><div class="large-12 columns"><hr /></div></div>';*/
                    
                    // Get Search
                    //$query="variable";
                   // $search_string = preg_replace("/[^A-Za-z0-9]/", " ", $query);
                   // $search_string = mysql_real_escape_string($search_string);
                      $search_string= $_POST['ser'];
                      
                    // Check Length More Than One Character
                    if (strlen($search_string) >= 1 && $search_string !== ' ') {
                        // Build Query
                        $username=$_SESSION['user_name'];
                       // $query1= "SELECT Course_Name from Registered_Course WHERE Email='$username'";
                        $query = 'SELECT * FROM Question WHERE Q_Text LIKE "%'.$search_string.'%" AND Course_name IN (SELECT Course_Name from Registered_Course WHERE Email="'.$username.'")';

                        // Do Search
                        $result = mysql_query($query);
                        //exit;
                        while($results = mysql_fetch_array($result)) {
                            $result_array[] = $results;
                        }
                    //exit;
                        // Check If We Have Results
                        if (isset($result_array)) {
                             echo '<div class="row">
            <div class="large-12 columns">
              <h4 style="font-family:enriqueta-bold,Garamond,serif;"
><b>Similar Questions</b></h4>
                <hr />
          </div>
            
      </div> ';
                            foreach ($result_array as $result) {
                    //answer.php?qid='.$qid.'&y='.$z.'
                                // Format Output Strings And Hightlight Matches
                                //
                                $display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['Q_Text']);
                                //$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['Q_Text']).'&lang=en';
                                $display_url = 'answer.php?qid='.$result['QID'].'&y='.$result['Course_Name'];


                                // Insert Name
                                //$rr='C:/wamp/www/Edunet/courses/Coursename'.$result['Course_Name'].'.jpg';
                                $name=$result['Email'];
                                $query2="SELECT Firstname,College from End_User WHERE Email='$name'";
                                 $result2 = mysql_query($query2);
                        //exit;
                        while($results = mysql_fetch_array($result2)) {
                            $a=$results['College'];
                            $b=$results['Firstname'];
                        }
                                $output = str_replace('nameString', $display_name, $html);
                                $output = str_replace('Username', $b, $output);
                                $output = str_replace('Collegename', $a, $output);

                                // Insert URL
                                $output = str_replace('urlString', $display_url, $output);
                                $output = str_replace('Coursename', $result['Course_Name'], $output);
                                
                                
                                if($username==$result['Email']) {$output.='<a href="remove_question.php?qid=QID&y=Coursename" class="button small  radius" style="padding:10px;">Remove</a></span>';}
         else $output.= '</span>';
                        $output = str_replace('Coursename', $result['Course_Name'], $output);
                        $output = str_replace('QID', $result['QID'], $output);
                                
         $output.=$html2;

                                // Output
                                echo($output);
                            }
                        }else{

                            // Format No Results Output
                            $output=$html3;
                           /* $output = str_replace('urlString', 'javascript:void(0);', $html);
                            $output = str_replace('nameString', '<b>No Results Found.</b>', $output);
                            $output = str_replace('Coursename', 'sorry', $output);
                            $output = str_replace('funcStr', 'Sorry :(', $output);*/

                            // Output
                            echo($output);
                        }
                    }
                   }
                                                                                      

                    ?>
          
    
    </div>
    </div>
  </body>
</html>