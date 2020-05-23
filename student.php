<?php
	session_start();
	if(isset($_POST['submit']))
	{
		mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('student') or die(mysql_error());
 		$name=$_POST['name'];
 		$pwd=$_POST['pwd'];
 		if($name!=''&&$pwd!='')
 		{
   			$query=mysql_query("select * from student where username='".$name."' and password='".$pwd."'") or die(mysql_error());
   			$res=mysql_fetch_row($query);
   			if($res)
   			{
    			$_SESSION['name']=$name;
    			header('location:welcome.php');
   			}
   			else
   			{
    			echo'<span style="color:black;
  			margin-left:40%;
  			font-size:20px;
  			font-family:cursive;">Your entered username or password is incorrect</span>';
   			}
 		}
 		else
 		{
  			echo'<span style="color:black;
  			margin-left:520px;
  			font-size:20px;
  			font-style:italic;
  			font-family:cursive;
  			"
  			>Enter both username and password</span>';
 		}
	}
?>