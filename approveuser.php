<?php
$link=mysqli_connect('localhost','root','','student');
//mysql_select_db('student');

$id = $_GET['id'];
$valid = $_GET['valid'];

if($valid==0){
	mysqli_query($link,"UPDATE student SET valid=1 WHERE id='$id'");
	header('location: adminpanel2.php?valid=user');	
}

?>