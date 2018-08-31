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
      
      
      
      <nav class="top-bar" >
        <ul class="title-area">
         <li class="name"><h1><a href="index.php">EduNet</a></h1></li>
        </ul>  
    </nav>
      <div class="row">
      <div class="large-2 columns" ><!-- <img src="2.jpg" class="left" style="width:2128px; height:600px;"> --></div>
      <div class="large-10 columns">
<form action="newcollege.php" method="post" data-abide >
  
    <fieldset>
    <legend style="background-color:rgba(210, 222, 239, 0.98); "><h3><b>Register College</b></h3></legend>
      <div class="row">
          
           <div class="large-5 columns left">
              
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  
                  <div class="name-field" ><label><input type="text" required pattern="[a-zA-Z]+" name="firstname" placeholder="First Name"></label>
                      <small class="error">Name is required and must be a string.</small></div>   
                  
              
          </div>
          <div class="large-5 columns left">
              
                 <!-- <div class="small-3 columns">
                   <label class="right inline"><b> First Name </b><small>Required</small></label> 
                  </div> -->
                  
                  <div class="name-field" ><label><input type="text" required pattern="[a-zA-Z]+" name="lastname" placeholder="Last Name"></label>
                      <small class="error">Name is required and must be a string.</small></div>   
                  </div>
              
          
         </div>
        <div class="row">
         
          <div class="large-12 columns">
              <div class="row">
                 <!-- <div class="small-3 columns">
                  <!-- <label class="right inline"><b>Email </b><small>Required</small></label> 
                  </div> -->
                  <div class="small-10 columns">
                  <div class="email-field"><label><input type="email" name="email" placeholder="Your Email" required></label>
                      <small class="error">An email address is required.</small></div> 
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
                  <div class="small-10 columns">
                  <div class="name-field" ><label><input type="text"  name="college_name" required pattern="[a-zA-Z0-9\x20]+" placeholder="College Name" required></label>
                      <small class="error">Name is required and must not contain special characters.</small></div>   
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
                  <div class="small-10 columns">
                    <div class="row collapse">
                      
                        <div class="small-12 columns large-12">
                            <div class="url-field">
                            <label><input type="url" name="url" id="ur" placeholder="College URL e.g http://www.vit.ac.in" required></label>
                            <small class="error">College Url is Required</small></div>
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
                  <div class="small-10 columns">
                     <textarea name="about" placeholder="Comments" ></textarea>              
                  </div> 
              </div>
          </div>
        </div>
      <div class="row">
          <div class="large-3 columns"></div> 
          <div class="large-9 columns">
          <button type="submit" class="button radius" value="SendRequest">Send Request</button>
        
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
