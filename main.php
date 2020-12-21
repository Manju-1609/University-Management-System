<?php
session_start();
$username="";
$email="";
$dob="01-01-1999";
$doe="01-01-1999";
$mobil="";

//registering
$errors=array();
$db=mysqli_connect('localhost','root','','practise'); //or die("couldnt connect to database");

if(isset($_POST['register']))
{
$username=mysqli_real_escape_string($db,$_POST['username']);
$name= mysqli_real_escape_string($db,$_POST['name']);
$dob= mysqli_real_escape_string($db,$_POST['DOB']);
$email= mysqli_real_escape_string($db,$_POST['email']);
$mobil= mysqli_real_escape_string($db,$_POST['mobile']);
$password1= mysqli_real_escape_string($db,$_POST['password1']);
$doe= mysqli_real_escape_string($db,$_POST['DOE']);
$ColID= mysqli_real_escape_string($db,$_POST['ColID']);
$sem= mysqli_real_escape_string($db,$_POST['sem']);
$password2= mysqli_real_escape_string($db,$_POST['password2']);

if($password2!=$password1) {array_push($errors,"Passwords not matched");}

//check for existing users
$user_check="SELECT * from student where Registration_No='$username' OR email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check);
$row=mysqli_num_rows($results);
if($row)
{
  {
    array_push($errors,"Already registered with this email id or username");
  }
}

if(count($errors)==0)
{
  $query1="INSERT INTO student (Registration_No,name,DOB,email,mobile_no, Date_Of_Enrollment,College_ID,Semester) VALUES ('$username','$name','$dob','$email','$mobil','$doe','$ColID','$sem')";
  $query2="INSERT INTO user (username,password) VALUES ('$username','$password1')";

  mysqli_query($db,$query1);
  mysqli_query($db,$query2);

      $_SESSION['username']=strtoupper($username);
      echo $_SESSION['username'];
      $_SESSION['msg']="your are logged in";
      echo $_SESSION['msg'];
      header("location:register.php");

  //header('location:reg.php');
}
}

else if(isset($_POST['login']))
{
  $username=mysqli_real_escape_string($db,$_POST['username']);
  $password1= mysqli_real_escape_string($db,$_POST['password1']);
  $sql="SELECT * FROM user WHERE username='$username' AND password='$password1'";
  $results=mysqli_query($db,$sql);
  if(mysqli_num_rows($results)==1)
  {
  $_SESSION['username']=$username;
  echo $_SESSION['username'];
  $_SESSION['msg']="your are logged in";
  echo $_SESSION['msg'];
  while($field=mysqli_fetch_assoc($results))
  if($field["username"]==$username)
  {
    $logintime=$field["Login_Time"];
    break;
  }

  $_SESSION['time']=$logintime;
  echo "<br>"."last login on ".$_SESSION['time'];
  date_default_timezone_set("Asia/Kolkata");
  $date=date('Y-m-d H:i:s');

  $login_query="UPDATE user SET Login_Time='$date' where username='$username'";
  mysqli_query($db,$login_query);
  header("location:display.php");
  
  if($_SESSION['username']==1234 && $_SESSION['password1']="1234"){
    while($field=mysqli_fetch_assoc($results))
  if($field["username"]==$username)
  {
    $logintime=$field["Login_Time"];
    break;
  }

  $_SESSION['time']=$logintime;
  echo "<br>"."last login on ".$_SESSION['time'];
  date_default_timezone_set("Asia/Kolkata");
  $date=date('Y-m-d H:i:s');

  $login_query="UPDATE user SET Login_Time='$date' where username='$username'";
  mysqli_query($db,$login_query);
  header("location:admin.php");
  }
 }
  else
  {
    array_push($errors,"Passwords not matched");
  }

}
else if(isset($_GET['logout']))
{
  session_destroy();
  unset($_SESSION['username']);
  header("location:display.php");
}


?>
