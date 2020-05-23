<?php     
         session_start();
         if(isset($_SESSION['username']))
         	;
         else
         	 header('location:index.php');
         	?>
<script src="check.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>

	</head>
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

      <li class="h4"><a href="signout.php">Logout&nbsp;&nbsp;</a></li>
      
    </div>

  </div>
  </div>

 </nav>


<div align="center">
	<legend></legend>
<fieldset >
	<h3>Welcome <u><?php echo  $_SESSION['username'];?></u>
	&nbsp&nbsp&nbsp&nbsp&nbsp<img src="uploads/<?php echo  $_SESSION['image'];?>" height="100"></h3>
<div align="right">

</div>
</fieldset>
</div>
<div align="center">
<fieldset>
<legend>Personal information:</legend>
<table border="0" align="centre" style="border-radius: 0%; margin-left: 0px;" width="50%" cellpadding="10">
<tr><td>First Name: <th><?php echo  $_SESSION['fname'];?></th></td></tr>

<tr><td>Middle Name: <th><?php echo  $_SESSION['mname'];?></th></td></tr>

<tr><td>Last Name: <th><?php echo  $_SESSION['lname'];?></th></td></tr>

<tr><td>Contact No: <th><?php echo  $_SESSION['contact'];?></th></td></tr>

<tr><td>Date of Birthday: <th><?php echo  $_SESSION['birthday'];?></th></td></tr>

<tr><td>Age: <th><?php echo $_SESSION['age'];?></th></td></tr>

<tr><td>Gender: <th><?php echo $_SESSION['gender'];?></th></td></tr>

<tr><td>Hobbies: <th><?php echo $_SESSION['hobbies'];?></th></td></tr>
</table>
</fieldset>
</div>  
<div align="center">
<fieldset>
<legend>Registration information:</legend>
<table border="0" align="centre" style="border-radius: 0%; margin-left: 0px;" width="50%" cellpadding="10">

<tr><td>Registration No: <th><?php echo  $_SESSION['reg_no'];?></th></td></tr>

<tr><td>Department: <th><?php echo  $_SESSION['dept'];?></th></td></tr>

<tr><td>Roll No: <th><?php echo  $_SESSION['roll_no'];?></th></td></tr>

<tr><td>Semester: <th><?php echo $_SESSION['sem'];?></th></td></tr>
<tr><td>10th percentage: <th><?php echo $_SESSION['percent1'];?></th></td></tr>
<tr><td>12th percentage: <th><?php echo $_SESSION['percent2'];?></th></td></tr>
<tr><td>Semester CGPA: <th><?php echo $_SESSION['cgpa'];?></th></td></tr>

<tr><td>Email: <th><?php echo $_SESSION['email'];?></th></td></tr>

<tr><td>Your Password: <th><?php echo $_SESSION['password'];?></th></td></tr>

</table>
</fieldset>
</div>  
