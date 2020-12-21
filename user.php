<?php include('main.php') ?>
<?php
//$logintime=date
$ins="INSERT INTO user (username,password) VALUES ('$username','$password1')";
mysqli_query($db,$ins);
$_SESSION['username']=strtoupper($username);
echo $_SESSION['username'];
$_SESSION['msg']="your are logged in";
echo $_SESSION['msg'];
header("location:login.php");

 ?>
