<?php
session_start();

if(!$_SESSION['username']){

	header('location: admin_login.php');

}
?>

<html>
	<head><title>User Details</title>

<script src="check.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet"><script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
mysql_connect('localhost','root','');
mysql_select_db('student');

$id = $_GET['id'];

$query = "select * from student where id='$id'";

		$run = mysql_query($query);

		while($row=mysql_fetch_array($run))
		{
		$id=$row['id'];
		  $fname=$row['fname'];
          $mname=$row['mname'];
          $lname=$row['lname'];
          $contact=$row['contact'];
          $birthday=$row['birthday'];
          $age=$row['age'];
          $gender=$row['gender'];
          $hobbies=$row['hobbies'];
          $reg_no=$row['reg_no'];
          $dept=$row['dept'];
          $roll_no=$row['roll_no'];
          $sem=$row['sem'];
          $percent1=$row['percent1'];
          $percent2=$row['percent2'];
          $cgpa=$row['cgpa'];
          $email=$row['email'];
          $username=$row['username'];
          $password=$row['password'];
          $image=$row['image'];
          $valid = $row['valid'];
?>

<style>
table{
border: 2px solid black;
margin: 25px;

}
td{
padding:10px;
padding-left:100px;
padding-right:10px;
}
</style>
<body background="photo/04.jpg">
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
             <li class="h4"><a href="signout.php" class="btn btn-primary"><font color="white">Logout</font>&nbsp;&nbsp;</a></li>
              <li class="h4"><a href="adminpanel2.php" class="btn btn-primary"><font color="white">Back</font>&nbsp;&nbsp;</a></li>
    
      
    </div>

  </div>
  </div>

 </nav>


<div id="cv" class="instaFade">
  <div class="mainDetails">
    <div id="headshot" class="quickFade">
      <img src="uploads/<?php echo  $image;?>" height="100">

    </div>
    
    <div id="name">
      <h1 class="quickFade delayTwo"><?php echo  $fname;?> <?php echo  $lname;?></h1>
      <h2 class="quickFade delayThree"><?php echo  $username;?></h2>
    </div>
    
    <div id="contactDetails" class="quickFade delayFour">
      <ul>
        <li>email: <?php echo $email;?></li>
        <li>mobile: <?php echo  $contact;?></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  
  <div id="mainArea" class="quickFade delayFive">
    <section>
      <div class="sectionTitle">
        <h1>Personal Information:</h1>
      </div>
      
      <div class="sectionContent">
        <article>
          <h2>Date of Birthday: </h2>
          <p class="subDetails"><?php echo  $birthday;?></p>
          <p></p>
        </article>
        
        <article>
          <h2>Age: </h2>
          <p class="subDetails"><?php echo  $age;?></p>
          <p></p>
        </article>
        
        <article>
          <h2>Gender: </h2>
          <p class="subDetails"><?php echo  $gender;?></p>
          <p></p>
        </article>

        <article>
          <h2>Hobbies: </h2>
          <p class="subDetails"><?php echo  $hobbies;?></p>
          <p></p>
        </article>
        </div>
      <div class="clear"></div>
    </section>
    
    
    <section>
      <div class="sectionTitle">
        <h1>Registration information:</h1>
      </div>
      
      <div class="sectionContent">
        <article>
          <h2>Registration No: </h2>
          <p class="subDetails"><?php echo  $reg_no;?></p>
          <p></p>
        </article>
        
        <article>
          <h2>Department: </h2>
          <p class="subDetails"><?php echo  $dept;?></p>
          <p></p>
        </article>

        <article>
          <h2>Roll No: </h2>
          <p class="subDetails"><?php echo  $roll_no;?></p>
          <p></p>
        </article>

        <article>
          <h2>Semester: </h2>
          <p class="subDetails"><?php echo  $sem;?></p>
          <p></p>
        </article>
	<article>
          <h2>10th percentage: </h2>
          <p class="subDetails"><?php echo  $percent1;?></p>
          <p></p>
        </article>
	<article>
          <h2>12th percentage: </h2>
          <p class="subDetails"><?php echo  $percent2;?></p>
          <p></p>
        </article>
	<article>
          <h2>Semester total cgpa: </h2>
          <p class="subDetails"><?php echo  $cgpa;?></p>
          <p></p>
        </article>

      </div>
      <div class="clear"></div>
    </section>
    
  </div>
</div>

<?php
}
?>
</body>
</html>
