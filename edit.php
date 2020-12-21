<?php
session_start();
$db=mysqli_connect('localhost','root','','practise');
$sql="UPDATE student SET  Name='$_POST[name]',Email='$_POST[email]',Mobile_No='$_POST[mobile]',Semester='$_POST[sem]',Fees_Description='$_POST[fee]' WHERE Registration_No='$_POST[id]'";
if(mysqli_query($db,$sql))
{
  header("refresh:1; url=editmain.php");
  echo "Update successful!";
}
else
  echo "Not updated!";

 ?>
