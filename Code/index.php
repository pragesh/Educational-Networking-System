
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
      
      
      <nav class="top-bar" style="height:110px; background-color:black;">
       <div class="row">
        <div class="large-2 columns">
        <ul class="title-area">
        
         <li class="name"><h1 style="margin-top:25px; font-size:30px;"><a href="index.php">EduNet</a></h1></li>
        
        </ul>
        </div>
           <div class="large-4 columns"></div>
        <div class="large-6 columns" style="margin-top:10px;">
            <form action="login.php" method="post" >
            <div class="small-5 columns large-5">
               <label style="color:white;">Email</label>
                <input type="text" name="user" placeholder="Email" required>
                 <label style="font-size:10px; color:white; margin-top:0px;"> <input type="checkbox" name="rem">&nbsp;&nbsp;&nbsp;Keep me logged in</label>
                 
            </div>
             <div class="small-5 columns large-5">
               <label style="color:white;">Password</label>
                 <input type="password" name="pass" placeholder="Password" required>
                <a href="forgotpassword.php"><label style="font-size:10px; color:white; margin-top:0px;">Forgot your password?</label></a>
            </div>
          <div class="small-2 columns large-2" style="margin-top:18px;">
               <button type="submit"  class="button radius secondary small" value="Login">Login
            </div>
       
            </form>
       
               </div>
         </div>  
    </nav>
      <div class="row">
      <div class="large-3 columns" ><!-- <img src="2.jpg" class="left" style="width:2128px; height:600px;"> --></div>
      <div class="large-9 columns">
<form action="register.php" method="post" data-abide >
  
    <fieldset>
    <legend style="background-color:rgba(210, 222, 239, 0.98); "><h3><b>Sign Up</b></h3></legend>
      
      <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="name-field" ><label><input type="text" required pattern="[a-zA-Z]+" name="first" placeholder="First Name"></label>
                      <small class="error">Name is required and must be a string. White spaces not allowed</small></div>   
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
                  <div class="name-field"><label><input type="text" required pattern="[a-zA-Z]+" name="last" placeholder="Last Name"></label>
                      <small class="error">Name is required and must be a string.White spaces not allowed</small></div> 
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
                  <div class="email-field"><label><input type="email" name="email" placeholder="Email" required></label>
                      <small class="error">An valid email address is required.</small></div> 
                  </div> 
              </div>
          </div>
        </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b>Password </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="password-field"><label><input type="password" name="pass" id="password"  required pattern="^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&?+-_ ]).*$" placeholder="Password" required></label>
                      <small class="error">Password must contain 8 characters and at least one number, one letter and one unique character such as !#$%&?+-_  White space treated as special character.</small></div> </div>
                  </div> 
              </div>
          </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                 <!-- <label class="left"><b>Confirm Password </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-9 columns">
                  <div class="password-confirmation-field"><label><input type="password" name="pass2" placeholder="Retype Password" data-equalto="password" required></label>
                      <small class="error">Password mismatch.</small></div> </div>
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
                  <input type="radio" name="gen" value="Male" id="m" checked><label for="m"><b>Male</b></label>
                  <input type="radio" name="gen" value="Female" id="f"><label for="f"><b>Female</b></label>
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
                            <label><input type="text" id="db" name="dob" pattern="month_day_year" placeholder="DOB" required></label>
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
                        <option value="Student">Student</option>
                        <option value="Faculty">Faculty</option>
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

                         //session_start();
                         include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

                         $query="SELECT * FROM College";
                         $result=mysql_query($query);
                         echo '<select name="college" style="height:45px;" required>';
                        echo '<option value="">Select Your College</option>';
                        while($temp=mysql_fetch_array($result)){
                           $college=$temp['College_Name'];
                            echo "<option value='{$college}'>{$college}</option>";
                        }
                       
                         echo '</select>';
                        ?>
                      
                      <small class="error">Please choose the correct answer.</small> 
                        
                      </div>
                  <div class="small-3 columns">
                  <a href="registernewcollege.php" class="button success radius small" value="Register" style="width:200px;">Register New College</a>
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
                            
                            <input type="url" name="url" id="ur" placeholder="College URL">
                           
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
                     <textarea name="about" placeholder="Write About Yourself" ></textarea>              
                  </div> 
              </div>
          </div>
        </div>
      <div class="row">
          <div class="large-2 columns"></div> 
          <div class="large-10 columns">
          <button type="submit" class="button radius" value="SignUp"> Sign Up</button>
        <a href="index.php" class="button success radius"> Reset </a>
               </div>
    </div>
      </fieldset>
</form>
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
