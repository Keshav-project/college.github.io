<html>
  <head>
    <meta charset="utf-8">
    <title>Student Information System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="mystyle.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet"><script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="mystyle.css">

  </head>
  <body >
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
      <div class="nav navbar-nav ">
      <li class="h4"><a href="index.php" class="btn btn-success"><font color="white">Home </font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="student_login.php" class="btn btn-success"><font color=white>Student Login</font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="admin_login.php" class="btn btn-success"><font color=white>Administrator Login </font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="stu_reg.html" class="btn btn-success"><font color=white>Student Registration </font>&nbsp;&nbsp;</a></li>
    </div>
  
  </div>
  </div>

 </nav>
</br>


<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$birthday=$_POST['birthday'];
$contact=$_POST['contact'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$reg_no=$_POST['reg_no'];
$roll_no=$_POST['roll_no'];
$sem=$_POST['sem'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['pass'];
$dept=$_POST['dept'];
$image=$_FILES["image"]["name"];


$checkbox1=$_POST['txtHobbi'];
$chk="";
foreach($checkbox1 as $chk1)
{
    $chk.=$chk1.",";
}

$percentx=$_POST['percent1'];
$percenty=$_POST['percent2'];
$cgpa=$_POST['cgpa'];



$sql1 = "INSERT INTO student (fname,mname,lname,contact,birthday,age,gender,hobbies,reg_no,roll_no,sem,percent1,percent2,cgpa,email,username,password,dept,image,valid)
VALUES ('$fname','$mname','$lname','$contact','$birthday','$age','$gender','$chk','$reg_no','$roll_no','$sem','$percentx','$percenty','$cgpa','$email','$username','$password','$dept','$image',0)";


if (mysqli_query($conn, $sql1)) {
    echo "Thank you! You have successfully created your account wait for admin approval.";

    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
       <div class="container site-footer-container">
    <ul class="site-footer-links">
     
        
      <p><font color="white">© National Institute of Technology, Durgapur ® All Rights Reserved </font><span ></p>
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
        <li><a href="http://www.nitdgp.ac.in/contact_us.php" data-ga-click="Footer, go to contact, text:contact">
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
