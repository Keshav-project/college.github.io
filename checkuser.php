

<?php
$q = ($_GET['q']);
$con = mysqli_connect('localhost','root','','student');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"student");
$sql="SELECT * FROM student WHERE username = '$q'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
  echo "username available";
else
  echo " $q username not available .Please try a different one";

mysqli_close($con);
?>
