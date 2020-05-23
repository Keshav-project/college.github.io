<html>
  <head>
     <meta charset="utf-8">
    <title>Student Information System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script src="check.js"></script>  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet"><script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="mystyle.css">      
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
function ChangeCaptcha() {
  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
  var string_length = 6;
  var ChangeCaptcha = '';
  for (var i=0; i<string_length; i++) {
    var rnum = Math.floor(Math.random() * chars.length);
    ChangeCaptcha += chars.substring(rnum,rnum+1);
  }
  document.getElementById('randomfield').value = ChangeCaptcha;
}
function check() {
if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
//window.open('https://www.google.co.in','_self');
}
else {
alert('Please re-check the captcha');
}
}

function reloadCaptcha()
{
  img = document.getElementById('captcha1');
  img.src = ChangeCaptcha();
}



function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#showpic').attr('src', e.target.result);
                    $('#showpic').show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

          $(document).ready(function()
          {
            $('#other').click(function(){
              $('#others').show();
            });
          });


    </script>
    <script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<style>
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}
</style>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
?>



  </head>
  <body onload="ChangeCaptcha();" background="photo/t5eKUtv.jpg" >


    <nav class="nav navbar-inverse" >
  <div class="container ">
    
     <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="visible-lg navbar-brand" href="#"></a>
            </div>
      <div class="collapse navbar-collapse" id="nav1" >
      <div class="nav navbar-nav">
    <li class="h4"><a href="signout.php" class="btn navbar-btn"><font color="white">Logout</font>&nbsp;&nbsp;</a></li>
     <li class="h4"><a href="welcome.php" class="btn navbar-btn navbar-left"><font color="white">View Profile</font>&nbsp;&nbsp;</a></li>
    </div>
  
  </div>
  </div>

 </nav>
  <div class="vertical-center">
      <div class="container">
         <div class="row">
         
          
    </div>
    </div>
  </div>
    <div class="vertical-center">
      <div class="container">
        <div class="row">
          <!-- well is for setting the page in middle  search bootstrap/components/well -->
          <div class=" col-lg-10 col-lg-offset-1 col-md-4 col-md-offset-4 well">
             

            
            <form name="register" method="post" action="updatedatabase.php" enctype="multipart/form-data" onsubmit="return validateForm()">
       
                        <div class="panel panel-success">
      <div class="panel-heading"><h2 class="text-center">Personal information</h2></div>
    </div>
   
              <div class="form-group">
                <label>First name: <font color="red">*</font></label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="fname" onblur="checkFname()" class="form-control" placeholder="Firstname" value="<?php echo  $_SESSION['fname'];?>"/>
                </div>  
              </div>
              <div class="form-group">
                <label>Middle name: </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="mname" class="form-control" placeholder="Middlename" value="<?php echo  $_SESSION['mname'];?>"/>
                </div>  
              </div>
              <div class="form-group">
                <label>Last name: <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="lname" onblur="checkLname()" class="form-control" placeholder="Lastname" value="<?php echo  $_SESSION['lname'];?>"/>
                </div>  
              </div>
              <div class="form-group">
                <label>Contact no: <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-phone"></i>
                  </span>

                  <input type="text" name="contact" onblur="checkContact()" maxlength="10" class="form-control" placeholder="Contact No." value="<?php echo  $_SESSION['contact'];?>"/>
                </div>  
              </div>
              <div class="form-group">
                <label>Date of birth: <font color="red">*</font> </label>
              <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>

                  <input type="date" name="birthday" onblur="generateAge()"class="form-control" placeholder="Date of Birth" value="<?php echo  $_SESSION['birthday'];?>"/>
                </div>  
              </div>
            
    
              <div class="form-group">
                <label>Semester : <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-book"></i>
                  </span>
                  <select name="sem" value="<?php echo  $_SESSION['sem'];?>">
                  <option>&nbsp;</option>
                  <option value="First Sem" <?php if($_SESSION['sem']=="First Sem") echo 'selected'?> >First Semester</option>
                  <option value="Second Sem" <?php if($_SESSION['sem']=="Second Sem") echo 'selected'?>>Second Semester</option>
                  <option value="Third Sem" <?php if($_SESSION['sem']=="Third Sem") echo 'selected'?>>Third Semester</option>
                  <option value="Forth Sem" <?php if($_SESSION['sem']=="Fourth Sem") echo 'selected'?>>Forth Semester</option>
                  <option value="Fifth Sem" <?php if($_SESSION['sem']=="Fifth Sem") echo 'selected'?>>Fifth Semester</option>
                  <option value="Sixth Sem" <?php if($_SESSION['sem']=="Sixth Sem") echo 'selected'?>>Sixth Semester</option>
                  <option value="Seventh Sem" <?php if($_SESSION['sem']=="Seventh Sem") echo 'selected'?>>Seventh Semester</option>
                  <option value="Eight Sem" <?php if($_SESSION['sem']=="Eight Sem") echo 'selected'?>>Eight Semester</option>
                </select>
                </div>  
              </div>
              <div class="form-group">
                <label>10th percentage(%)  : <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="percent1"  value="<?php echo  $_SESSION['percent1'];?>"  class="form-control" placeholder="percent shoulbe be like 80.00,79.25 after [.] maximum 2 digit,  don't write % after 79.25"/>
                </div>  
              </div>
              <div class="form-group">
                <label>12th percentage(%) : <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="percent2"   value="<?php echo  $_SESSION['percent2'];?>" class="form-control" placeholder="percent shoulbe be like 80.00,79.25 after [.] maximum 2 digit,  don't write % after 79.25 "/>
                </div>  
              </div>
              <div class="form-group">
                <label>CGPA : <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="cgpa"  value="<?php echo  $_SESSION['cgpa'];?>"  class="form-control" placeholder="your sem total cgpa like 7.98 "/>
                </div>  
              </div>

              <div class="form-group">
                <label>Email : <font color="red">*</font> </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                  </span>

                  <input  type="email" value="<?php echo  $_SESSION['email'];?>" name="email" onblur="validateEmail()" class="form-control" placeholder="Email id "/>
                </div>  
              </div>


              <div class="form-group">
                
                <td><input type="submit" name="register" value="Save" onclick="alert(ValidCaptcha());" class="btn btn-success btn-block"></td>
               
              </div>
  
            </form>

           
        
          </div>

                  
          </div> 

        
      </div>
  
    </div>
    <br/><br/>
   

        <br/><br/><br/><br/><br/><br/><br/>
       <div class="container site-footer-container">
    <ul class="site-footer-links">
     
        
      <p><font color="white">© SJB Institute of Technology, Bangaluru ® All Rights Reserved </font><span ></p>
      <br/><br/>
           
              <div class="row">
               
              <div class="col-md-1"><li><a href="blog.html" data-ga-click="Footer, go to blog, text:blog"><span>
                    <i class="glyphicon glyphicon-pencil"></i>
                  </span>Blog</a></li></div>
         <div class="col-md-1">
          <li><a href="aboutus.html" data-ga-click="Footer, go to about, text:about"><span>
                    <i class="glyphicon glyphicon-user"></i>
                  </span>About</a></li>
          </div>
         <div class="col-md-1">
        <li><a href="terms.html" data-ga-click="Footer, go to terms, text:terms"><span>
                    <i class="glyphicon glyphicon-asterisk"></i>
                  </span>Terms</a></li>
        </div>
         <div class="col-md-1">
        <li><a href="http://sjbit.edu.in/contact/" data-ga-click="Footer, go to contact, text:contact">
                    <span>
                    <i class="glyphicon glyphicon-earphone"></i>
                  </span>Contact
        </a></li>
      </div>
      <div class="col-md-1">
        <li><a href="help.html" data-ga-click="Footer, go to help, text:help">
          <span>
              <i class="glyphicon glyphicon-phone-alt"></i>
          </span>Help
        </a></li>
      </div></br></br>
    </div>
     </br></br></br>
        <li>
  
       <a href="https://twitter.com/sjbit_college?lang=en" class="btn btn-twitter">
    <i class="fa fa-twitter"></i>| Connect with Twitter Page
  </a>
</li>
  
  <li>
    
  <a href="http://sjbit.edu.in/" class="btn btn-google">
    <i class="fa fa-google"></i>| Connect with  Google Page
  </a>
  </li>
  <li>
    
  <a href="https://www.facebook.com/sjbitBGS/" class="btn btn-facebook">
    <i class="fa fa-facebook"></i> | Connect with Facebook Page
  </a>

  </li>
  
    </ul>
</div>
  


  
    
      
  </body>
</html>
