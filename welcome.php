<?php     
         session_start();
         if(isset($_SESSION['username']))
          ;
         else
           header('location:index.php');
          ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css">
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 




</head>
<body id="top" style="background-color: gray;">

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
        	 <li class="h4"><a href="signout.php" class="btn navbar-btn"><font color="white">Logout</font>&nbsp;&nbsp;</a></li>
        	 <li class="h4"><a href="update.php" class="btn navbar-btn navbar-left"><font color="white">Edit</font>&nbsp;&nbsp;</a></li>
      
    </div>

  </div>
  </div>

 </nav>


<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="uploads/<?php echo  $_SESSION['image'];?>" height="100">

		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo  $_SESSION['fname'];?> <?php echo  $_SESSION['lname'];?></h1>
			<h2 class="quickFade delayThree"><?php echo  $_SESSION['username'];?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>email: <?php echo $_SESSION['email'];?></li>
				<li>mobile: <?php echo  $_SESSION['contact'];?></li>
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
					<p class="subDetails"><?php echo  $_SESSION['birthday'];?></p>
					<p></p>
				</article>
				
				<article>
					<h2>Age: </h2>
					<p class="subDetails"><?php echo  $_SESSION['age'];?></p>
					<p></p>
				</article>
				
				<article>
					<h2>Gender: </h2>
					<p class="subDetails"><?php echo  $_SESSION['gender'];?></p>
					<p></p>
				</article>

				<article>
					<h2>Hobbies: </h2>
					<p class="subDetails"><?php echo  $_SESSION['hobbies'];?></p>
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
					<p class="subDetails"><?php echo  $_SESSION['reg_no'];?></p>
					<p></p>
				</article>
				
				<article>
					<h2>Department: </h2>
					<p class="subDetails"><?php echo  $_SESSION['dept'];?></p>
					<p></p>
				</article>

				<article>
					<h2>Roll No: </h2>
					<p class="subDetails"><?php echo  $_SESSION['roll_no'];?></p>
					<p></p>
				</article>

				<article>
					<h2>Semester: </h2>
					<p class="subDetails"><?php echo  $_SESSION['sem'];?></p>
					<p></p>
				</article>
				<article>
					<h2>10th percent: </h2>
					<p class="subDetails"><?php echo  $_SESSION['percent1'];?></p>
					<p></p>
				</article>
				<article>
					<h2>12th percent: </h2>
					<p class="subDetails"><?php echo  $_SESSION['percent2'];?></p>
					<p></p>
				</article>
				<article>
					<h2>Semester CGPA: </h2>
					<p class="subDetails"><?php echo  $_SESSION['cgpa'];?></p>
					<p></p>
				</article>

			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>

</body>
</html>