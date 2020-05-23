<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$_SESSION['fname']=$fname=$_POST['fname'];
$_SESSION['mname']=$mname=$_POST['mname'];
$_SESSION['lname']=$lname=$_POST['lname'];
$_SESSION['birthday']=$birthday=$_POST['birthday'];
$_SESSION['contact']=$contact=$_POST['contact'];
$_SESSION['sem']=$sem=$_POST['sem'];
$_SESSION['email']=$email=$_POST['email'];
$_SESSION['percent1']=$percent1=$_POST['percent1'];
$_SESSION['percent2']=$percent2=$_POST['percent2'];
$_SESSION['cgpa']=$cgpa=$_POST['cgpa'];



$sqlupdate = "UPDATE student SET fname='$fname',lname='$lname',birthday='$birthday',contact='$contact',sem='$sem',email='$email',percent1='$percent1',percent2='$percent2',cgpa='$cgpa' WHERE username='".$_SESSION['username']."';";

if ($conn->query($sqlupdate) == TRUE)
{
header("Location: welcome.php");
exit;
}
else {
echo "Error updating record: " . $conn->error;
}

$conn->close();

?>